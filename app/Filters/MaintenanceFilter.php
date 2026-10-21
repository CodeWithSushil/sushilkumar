<?php

namespace App\Filters;

use App\Libraries\Maintenance;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MaintenanceFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $maintenance = new Maintenance();

        if (! $maintenance->isActive()) {
            return;
        }

        $data = $maintenance->data();

        // Allow whitelisted IPs
        if (in_array($request->getIPAddress(), $data['allowed_ips'] ?? [], true)) {
            return;
        }

        // Allow bypass with a secret, e.g. https://site.com/?secret=abc123
        if (! empty($data['secret']) && $request->getGet('secret') === $data['secret']) {
            return;
        }

        return service('response')
            ->setStatusCode(503)
            ->setHeader('Retry-After', (string) ($data['retry_after'] ?? 600))
            ->setBody(view('errors/html/error_503', ['message' => $data['message'] ?? '']));
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
