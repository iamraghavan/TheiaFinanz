<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Helori\LaravelSeo\Facades\Seo;

class MainPage extends Controller
{
    private function getCountryDetails()
    {
        try {
            // Disable SSL verification (not recommended for production)
            $ipResponse = Http::timeout(10)->withoutVerifying()->get('https://api64.ipify.org/?format=json');
            $ipData = $ipResponse->json();

            // Extract the IP address from the response
            $ipAddress = $ipData['ip'];

            // Make a request to the geoplugin API to get location information based on IP
            $locationResponse = Http::timeout(10)->withoutVerifying()->get("http://www.geoplugin.net/json.gp?ip={$ipAddress}");
            $locationData = $locationResponse->json();

            // Check if the 'geoplugin_countryName' key exists in the response
            if (isset($locationData['geoplugin_countryName'])) {
                // Extract and return the country information
                return $locationData['geoplugin_countryName'];
            } else {
                // Log an error message
                Log::error('geoplugin_countryName not found in API response');
                return 'Unknown'; // You can customize the fallback value
            }
        } catch (\Exception $e) {
            // Log the exception
            Log::error('Error during API request: ' . $e->getMessage());
            return 'Error'; // You can customize the error fallback value
        }
    }

    public function index()
    {
        $country = $this->getCountryDetails();
        Seo::set('title', 'Theia Finanz - Unlock Financial Freedom with Our Strategic Planning');
        Seo::set('description', 'Empower your financial journey with Theia Finanz - unlock financial freedom through strategic planning. Start now!');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');

        return view('pages.index', compact('country'));
    }

    public function about_page()
    {
        $country = $this->getCountryDetails();

        Seo::set('title', 'About Theia Finanz - Unlock Financial Freedom with Our Strategic Planning');
        Seo::set('description', 'Welcome to Theia Finanz, your trusted financial consulting partner. We understand that each individual has unique financial needs and requirements.');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');

        return view('pages.about', compact('country'));
    }

    public function offering()
    {
        $country = $this->getCountryDetails();
        Seo::set('title', 'Offering - Unlock Financial Freedom with Our Strategic Planning');
        Seo::set('description', 'Empower your financial journey with Theia Finanz - unlock financial freedom through strategic planning. Start now!');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');
        return view('pages.offerings', compact('country'));
    }


    public function providers()
    {
        $country = $this->getCountryDetails();
        Seo::set('title', 'Providers - Unlock Financial Freedom with Our Strategic Planning');
        Seo::set('description', 'Empower your financial journey with Theia Finanz - unlock financial freedom through strategic planning. Start now!');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');
        return view('.pages.theia-providers', compact('country'));
    }
    public function contact_us()
    {
        $country = $this->getCountryDetails();
        Seo::set('title', 'Contact Us - Theia Finanz');
        Seo::set('description', 'Empower your financial journey with Theia Finanz - unlock financial freedom through strategic planning. Start now!');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');
        return view('pages.contact', compact('country'));
    }


    // Thanks Page Controller Function

    public function thankyou_page()
    {
        $country = $this->getCountryDetails();

        Seo::set('title', 'Thanks You ! - Theia Finanz');
        Seo::set('description', 'Thanks You ! - Theia Finanz');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');
        return view('pages.thanks', compact('country'));
    }

    public function policy_privacy()
    {
        $country = $this->getCountryDetails();

        Seo::set('title', 'privacy policy - Theia Finanz');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');
        return view('pages.privacy', compact('country'));
    }


    public function terms()
    {
        $country = $this->getCountryDetails();
        Seo::set('title', 'Terms & Conditions - Theia Finanz');
        Seo::set('keyword', 'financial services Colorado, Will & Trust Colorado, Life Insurance Colorado, Term Life Insurance Colorado, Whole Life Insurance Colorado, Annuities Colorado, IRA Colorado, 401(k) Colorado, 403(b) Colorado, Pension Rollover Colorado, Indexed Universal Life Colorado, IUL Colorado, College Planning Colorado, Kids Education Colorado, Retirement Planning Colorado, Wealth Management Colorado, Payment Platform Colorado, Financial Need Analysis Colorado, FNA Colorado, D.I.M.E Colorado, Additional Income Colorado');
        return view('pages.terms-and-conditions', compact('country'),);
    }

    public function __construct()
    {
        Seo::set('global-title', 'Theia Finanz - Unlock Financial Freedom with Our Strategic Planning');
        Seo::set('global-description', 'Empower your financial journey with Theia Finanz - unlock financial freedom through strategic planning. Start now!');

        Seo::set('logo-url', url('/assets/tfinanz.png'));
        Seo::set('search-url', url('/health?fresh'));
        Seo::set('latitude', 39.5186);
        Seo::set('longitude', -104.7614);

        Seo::set('email', 'letstalk@theiafinanz.com');
        Seo::set('phone', '+1 (720) 695-6667');
        Seo::set('opening-hours', 'Mo,Tu,We,Th,Fr 09:00-20:00');
        Seo::set('street-address', '8952 Snowball Way');
        Seo::set('address-locality', 'Parker');
        Seo::set('address-region', 'Colorado');
        Seo::set('address-country', 'US');
        Seo::set('postal-code', '80134');
        Seo::set('area-served', 'US');
        Seo::set('available-languages', ['English']);
        Seo::setContactPoint([
            'type' => 'customer-service',
            'phone' => '+1 (720) 695-6667',
            'area-served' => 'US',
            'opening-hours' => 'Mo,Tu,We,Th,Fr 09:00-20:00',
            'available-languages' => ['English']
        ]);

        Seo::set('og-locale', 'en_US'); // Open Graph locale
        Seo::set('og-image-url', url('/assets/fb-page01.webp')); // Open Graph image URL
        Seo::set('og-image-type', 'image/jpeg'); // Open Graph image type
        Seo::set('og-image-width', 1200); // Open Graph image width
        Seo::set('og-image-height', 630); // Open Graph image height



    }
}
