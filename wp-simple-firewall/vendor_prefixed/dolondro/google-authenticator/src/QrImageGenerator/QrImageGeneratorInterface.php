<?php

namespace AptowebDeps\Dolondro\GoogleAuthenticator\QrImageGenerator;

use AptowebDeps\Dolondro\GoogleAuthenticator\Secret;

interface QrImageGeneratorInterface
{
    public function generateUri(Secret $secret);
}
