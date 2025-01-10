<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Base Site URL
     * --------------------------------------------------------------------------
     *
     * URL to your CodeIgniter root. Typically, this will be your base URL,
     * WITH a trailing slash:
     *
     * E.g., http://example.com/
     */
    public string $baseURL = 'https://darkgray-grouse-813694.hostingersite.com';

    /**
     * Allowed Hostnames in the Site URL other than the hostname in the baseURL.
     */
    public array $allowedHostnames = [];

    /**
     * --------------------------------------------------------------------------
     * Index File
     * --------------------------------------------------------------------------
     *
     * Typically, this will be your `index.php` file, unless you've renamed it.
     */
    public string $indexPage = '';

    /**
     * --------------------------------------------------------------------------
     * URI PROTOCOL
     * --------------------------------------------------------------------------
     *
     * Determines how to retrieve the URI string. Default: 'REQUEST_URI'
     */
    public string $uriProtocol = 'REQUEST_URI';

    /**
     * --------------------------------------------------------------------------
     * Allowed URL Characters
     * --------------------------------------------------------------------------
     */
    public string $permittedURIChars = 'a-z 0-9~%.:_\-';

    /**
     * --------------------------------------------------------------------------
     * Default Locale
     * --------------------------------------------------------------------------
     */
    public string $defaultLocale = 'en';

    /**
     * --------------------------------------------------------------------------
     * Negotiate Locale
     * --------------------------------------------------------------------------
     */
    public bool $negotiateLocale = false;

    /**
     * --------------------------------------------------------------------------
     * Supported Locales
     * --------------------------------------------------------------------------
     */
    public array $supportedLocales = ['en'];

    /**
     * --------------------------------------------------------------------------
     * Application Timezone
     * --------------------------------------------------------------------------
     *
     * Default timezone. Modify based on your region.
     */
    public string $appTimezone = 'Asia/Jakarta'; // Updated to Jakarta timezone

    /**
     * --------------------------------------------------------------------------
     * Default Character Set
     * --------------------------------------------------------------------------
     */
    public string $charset = 'UTF-8';

    /**
     * --------------------------------------------------------------------------
     * Force Global Secure Requests
     * --------------------------------------------------------------------------
     *
     * Enforces HTTPS for all requests. Enable for production.
     */
    public bool $forceGlobalSecureRequests = true; // Enabled for HTTPS

    /**
     * --------------------------------------------------------------------------
     * Reverse Proxy IPs
     * --------------------------------------------------------------------------
     *
     * Configure proxy IPs if using a reverse proxy.
     */
    public array $proxyIPs = [];

    /**
     * --------------------------------------------------------------------------
     * Session Configuration
     * --------------------------------------------------------------------------
     *
     * Configure the session settings for the application.
     */
    public string $sessionDriver = 'CodeIgniter\Session\Handlers\FileHandler';
    public string $sessionCookieName = 'ci_session';
    public string $sessionSavePath = WRITEPATH . 'session'; // Default session save path
    public int $sessionExpiration = 7200; // Session expiration in seconds
    public bool $sessionMatchIP = false; // Match session to IP
    public int $sessionTimeToUpdate = 300; // Time to regenerate session ID (in seconds)
    public bool $sessionRegenerateDestroy = false; // Destroy old session on regenerate

    /**
     * --------------------------------------------------------------------------
     * Content Security Policy
     * --------------------------------------------------------------------------
     *
     * Enables the Response's Content Secure Policy.
     */
    public bool $CSPEnabled = true; // Enabled for better security
}
