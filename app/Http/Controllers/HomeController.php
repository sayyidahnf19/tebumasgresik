<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with all sections data
     */
    public function index()
    {
        // Hero Section Data
        $heroTitle = 'Produsen Songkok Berkualitas dari Gresik';
        $heroSubtitle = 'Songkok Premium, Untuk Ibadah & Acara Resmi';
        $heroDescription = 'Tebu Mas menyediakan songkok AC, non AC, dan full AC.';
        $heroDescriptionCont = 'Dengan bahan pilihan dan jahitan rapi';
        $heroDescriptionEnd = 'Cocok untuk penggunaan harian maupun acara resmi.';

        // Services Section Data
        $servicesLabel = 'Koleksi Songkok Tebu Mas';
        $servicesTitle = 'Pilih Jenis Songkok Sesuai Kebutuhan Anda';
        $services = [
            [
                'icon' => 'img/category/icon1.png',
                'title' => 'Calculated Weather',
                'description' => 'Built Wicket longer admire do barton vanity itself do in it.'
            ],
            [
                'icon' => 'img/category/icon2.png',
                'title' => 'Best Flights',
                'description' => 'Engrossed listening. Park gate sell they west hard for the.'
            ],
            [
                'icon' => 'img/category/icon3.png',
                'title' => 'Local Events',
                'description' => 'Barton vanity itself do in it. Preferd to men it engrossed listening.'
            ],
            [
                'icon' => 'img/category/icon4.png',
                'title' => 'Customization',
                'description' => 'We deliver outsourced aviation services for military customers'
            ]
        ];

        // Destinations Section Data
        $destinationLabel = 'Keunggulan Kami';
        $destinationTitle = 'Kenapa Tebu Mas Gresik Jadi Pilihan Anda?';
        $destinations = [
            [
                'image' => 'img/dest/dest1.jpg',
                'name' => 'Rome, Italy',
                'price' => 5420,
                'duration' => '10 Days Trip'
            ],
            [
                'image' => 'img/dest/dest2.jpg',
                'name' => 'London, UK',
                'price' => 4200,
                'duration' => '12 Days Trip'
            ],
            [
                'image' => 'img/dest/dest3.jpg',
                'name' => 'Full Europe',
                'price' => 15000,
                'duration' => '28 Days Trip'
            ]
        ];

        // Booking Section Data
        $bookingLabel = 'Easy and Fast';
        $bookingTitle = 'Book your next trip in 3 easy steps';
        $bookingSteps = [
            [
                'icon' => 'img/steps/selection.svg',
                'title' => 'Choose Destination',
                'description' => 'Choose your favourite place. No matter where you travel inside the World.'
            ],
            [
                'icon' => 'img/steps/water-sport.svg',
                'title' => 'Make Payment',
                'description' => 'After find your perfect spot, make your payment and get ready to travel.'
            ],
            [
                'icon' => 'img/steps/taxi.svg',
                'title' => 'Reach Airport on Selected Date',
                'description' => 'Lastly, you have to arrive at the airport on time and enjoy the vacation.'
            ]
        ];

        // Current Trip Data
        $currentTrip = [
            'title' => 'Trip To Greece',
            'date' => '14-29 June',
            'author' => 'Robbin joseph',
            'people' => '24 people going'
        ];

        // Testimonials Section Data
        $testimonialLabel = 'Testimonials';
        $testimonialTitle = 'What people say about Us.';
        $testimonials = [
            [
                'image' => 'img/testimonial/author.png',
                'quote' => 'On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.',
                'author' => 'Mike taylor',
                'title' => 'Lahore, Pakistan'
            ],
            [
                'image' => 'img/testimonial/author2.png',
                'quote' => 'Jadoo is recognized as one of the finest travel agency in the world. When it came to planning a trip, I found them to be dependable.',
                'author' => 'Thomas Wagon',
                'title' => 'CEO of Red Button'
            ],
            [
                'image' => 'img/testimonial/author3.png',
                'quote' => 'On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.',
                'author' => 'Kelly Willium',
                'title' => 'Khulna, Bangladesh'
            ]
        ];

        // Partners Section Data
        $partners = [
            ['logo' => 'img/partner/1.png', 'name' => 'Partner 1'],
            ['logo' => 'img/partner/2.png', 'name' => 'Partner 2'],
            ['logo' => 'img/partner/3.png', 'name' => 'Partner 3'],
            ['logo' => 'img/partner/4.png', 'name' => 'Partner 4'],
            ['logo' => 'img/partner/5.png', 'name' => 'Partner 5']
        ];

        // Newsletter Section Data
        $newsletterTitle = 'Subscribe to get information, latest news and other interesting offers about Cobham';

        return view('home', compact(
            'heroTitle',
            'heroSubtitle',
            'heroDescription',
            'heroDescriptionCont',
            'heroDescriptionEnd',
            'servicesLabel',
            'servicesTitle',
            'services',
            'destinationLabel',
            'destinationTitle',
            'destinations',
            'bookingLabel',
            'bookingTitle',
            'bookingSteps',
            'currentTrip',
            'testimonialLabel',
            'testimonialTitle',
            'testimonials',
            'partners',
            'newsletterTitle'
        ));
    }
}
