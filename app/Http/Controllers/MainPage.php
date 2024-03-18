<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

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
        $pageData = [
            'title' => 'Theia Finanz Your Path to Financial Freedom Through Strategic Planning',
            'description' => 'Empower your financial journey with Theia Finanz. Tailored strategies for wealth building, retirement planning, and more. Unlock a brighter future today.',
            'keywords' => ''


        ];
        return view('pages.index', compact('country'), $pageData);
    }

    public function about_page()
    {
        $country = $this->getCountryDetails();

        $pageData = [
            'title' => 'about us',
            'description' => '',
            'keywords' => ''


        ];
        return view('pages.about', compact('country'), $pageData);
    }

    public function offering()
    {
        $country = $this->getCountryDetails();
        $pageData = [
            'title' => 'Offering',
            'description' => '',
            'keywords' => ''


        ];
        return view('pages.offerings', compact('country'), $pageData);
    }


    public function providers()
    {
        $country = $this->getCountryDetails();
        $pageData = [
            'title' => 'Providers',
            'description' => '',
            'keywords' => ''


        ];
        return view('.pages.theia-providers', compact('country'), $pageData);
    }

    public function contact_us()
    {
        $country = $this->getCountryDetails();
        $pageData = [
            'title' => 'Contact Us',
            'description' => '',
            'keywords' => ''


        ];
        return view('pages.contact', compact('country'), $pageData);
    }


    // Thanks Page Controller Function

    public function thankyou_page()
    {
        $country = $this->getCountryDetails();

        $pageData = [
            'title' => 'Thank You',
            'description' => '',
            'keywords' => ''


        ];
        return view('pages.thanks', compact('country'), $pageData);
    }

    public function policy_privacy()
    {
        $country = $this->getCountryDetails();

        $pageData = [
            'title' => 'Privacy Policy',
            'description' => '',
            'keywords' => ''


        ];
        return view('pages.privacy', compact('country'), $pageData);
    }


    public function terms()
    {
        $country = $this->getCountryDetails();

        $pageData = [
            'title' => 'Terms & Conditions',
            'description' => '',
            'keywords' => ''


        ];
        return view('pages.terms-and-conditions', compact('country'), $pageData);
    }
}
