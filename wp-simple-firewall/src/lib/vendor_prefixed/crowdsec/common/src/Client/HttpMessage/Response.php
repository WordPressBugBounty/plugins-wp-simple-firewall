<?php
/**
 * @license MIT
 *
 * Modified by Paul Goodchild on 15-May-2025 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace AptowebDeps\CrowdSec\Common\Client\HttpMessage;

/**
 * CrowdSec response.
 *
 * @author    CrowdSec team
 *
 * @see      https://crowdsec.net CrowdSec Official Website
 *
 * @copyright Copyright (c) 2022+ CrowdSec
 * @license   MIT License
 */
class Response extends AbstractMessage
{
    /**
     * @var string
     */
    private $jsonBody;

    /**
     * @var int
     */
    private $statusCode;

    public function __construct(string $jsonBody, int $statusCode, array $headers = [])
    {
        $this->jsonBody = $jsonBody;
        $this->headers = $headers;
        $this->statusCode = $statusCode;
    }

    public function getJsonBody(): string
    {
        return $this->jsonBody;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
