<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $blog_posts = [
            [
                'title' => 'The Future of Artificial Intelligence',
                'content' => 'Startups require innovation and resilience. Understanding consumer behavior is key to launching a successful product. A strong team is crucial for business growth.',
                'imageUrl' => 'https://static.vecteezy.com/system/resources/previews/006/712/964/non_2x/abstract-health-medical-science-healthcare-icon-digital-technology-doctor-concept-modern-innovation-treatment-medicine-on-hi-tech-future-blue-background-for-wallpaper-template-web-design-vector.jpg',
                'category' => 'Health'
            ],
            [
                'title' => 'Mastering JavaScript: Tips for Beginners',
                'content' => 'Traveling introduces new cultures and perspectives. Exploring different landscapes and cuisines enriches our experiences. Every journey leaves lasting memories.',
                'imageUrl' => 'https://w0.peakpx.com/wallpaper/599/652/HD-wallpaper-man-traveler-tourist-travel-road.jpg',
                'category' => 'Travel'
            ],
            [
                'title' => 'The Importance of Mental Health Awareness',
                'content' => 'Building a personal brand increases career opportunities. Online presence through LinkedIn and blogs enhances credibility. Networking opens doors to collaborations.',
                'imageUrl' => 'https://w0.peakpx.com/wallpaper/295/877/HD-wallpaper-keep-your-health-neon-icon-red-background-neon-symbols-keep-your-health-neon-icons-keep-your-health-sign-medical-signs-keep-your-health-icon-medical-icons.jpg',
                'category' => 'Health'
            ],
            [
                'title' => 'How Travel Broadens Your Perspective',
                'content' => 'Scientific discoveries expand our understanding of the world. Advances in medicine and technology improve lives. Research paves the way for new possibilities.',
                'imageUrl' => 'https://c0.wallpaperflare.com/preview/966/1009/88/lake-memphremagog-aston-martin-luxury-money.jpg',
                'category' => 'Lifestyle'
            ],
            [
                'title' => 'Top Investment Strategies for Financial Growth',
                'content' => 'Work-life balance prevents burnout and increases productivity. Setting boundaries and prioritizing mental health lead to long-term success.',
                'imageUrl' => 'https://www.hdwallpapers.in/download/technology_blue_circuit_board_4k_hd_technology-HD.jpg',
                'category' => 'Technology'
            ],
            [
                'title' => 'Why Lifelong Learning is Essential for Success',
                'content' => 'Managing finances wisely ensures a secure future. Budgeting, saving, and investing are key to financial freedom. Understanding personal finance leads to better decisions.',
                'imageUrl' => 'https://i.pinimg.com/736x/25/f3/36/25f3363674a31e84b8fef7ba48b79cf1.jpg',
                'category' => 'Technology'
            ],
            [
                'title' => 'Balancing Work and Personal Life Effectively',
                'content' => "Coding is a valuable skill in today's digital era. Learning JavaScript and Python can open career opportunities. Web development and AI are growing fields.",
                'imageUrl' => 'https://png.pngtree.com/thumb_back/fh260/background/20230705/pngtree-online-education-3d-render-of-a-computer-on-a-wooden-table-image_3792188.jpg',
                'category' => 'Education'
            ],
            [
                'title' => 'Startup Success: Key Factors for Entrepreneurs',
                'content' => 'Understanding credit scores helps in financial planning. A good credit history provides better loan opportunities. Smart financial decisions lead to long-term stability.',
                'imageUrl' => 'https://images.pexels.com/photos/2916820/pexels-photo-2916820.jpeg?cs=srgb&dl=pexels-andre-furtado-43594-2916820.jpg&fm=jpg',
                'category' => 'Travel'
            ],
            [
                'title' => 'The Role of Science in Everyday Life',
                'content' => 'Music influences emotions and creativity. Different genres evoke various feelings. Listening to music can reduce stress and boost productivity.',
                'imageUrl' => 'https://www.pixelstalk.net/wp-content/uploads/images6/Beautiful-4K-Travel-Wallpaper-HD.jpg',                'category' => 'Travel'
            ],
            [
                'title' => 'How Entertainment Impacts Society',
                'content' => 'Healthy eating supports long-term well-being. Including fruits, vegetables, and proteins is crucial. Avoiding processed food improves energy levels.',
                'imageUrl' => 'https://www.pixelstalk.net/wp-content/uploads/2016/11/Entertainment-Wallpapers-HD.jpg',
                'category' => 'Entertainment'
            ],
            [
                'title' => 'AI and Automation: The Next Industrial Revolution',
                'content' => 'E-learning platforms are revolutionizing education. Virtual classrooms and interactive courses enhance learning. Students can access knowledge from anywhere.',
                'imageUrl' => 'https://wallpapersok.com/images/high/travel-4k-volcano-ynlmn2hmts0n7gsw.jpg',
                'category' => 'Travel'
            ],
            [
                'title' => 'Building Scalable Web Applications with React',
                'content' => 'Entertainment is a major part of our daily lives. Movies, music, and video games provide relaxation. The digital age has transformed how we consume media.',
                'imageUrl' => 'https://wallpapersok.com/images/high/travel-4k-smokey-mountains-3ieautj8xt1u5z2j.jpg',
                'category' => 'Travel'
            ],
            [
                'title' => 'The Benefits of a Healthy Lifestyle',
                'content' => 'Backpacking offers freedom and adventure. Experiencing new cultures enriches personal growth. Traveling solo teaches independence and adaptability.',
                'imageUrl' => 'https://wallpaper.forfun.com/fetch/7d/7d561534a96cf08d6c708ea0d5b32a83.jpeg',
                'category' => 'Programming'
            ],
            [
                'title' => 'Exploring Hidden Travel Destinations',
                'content' => 'Renewable energy is essential for sustainability. Solar and wind power reduce environmental impact. Green technologies are shaping the future economy.',
                'imageUrl' => 'https://i.pinimg.com/736x/2b/a0/19/2ba0197066e5d43fcdc30f89a6d85c37.jpg',
                'category' => 'Technology'
            ],
            [
                'title' => 'How to Make Smart Financial Decisions',
                'content' => 'AI is revolutionizing industries with automation. Machine learning improves decision-making. The future of AI holds endless possibilities for innovation.',
                'imageUrl' => "https://wallpaperaccess.com/full/1104816.jpg",
                'category' => 'Finance'
            ],
            [
                'title' => 'The Impact of Online Education on Learning',
                'content' => 'Starting a business requires passion and strategy. Entrepreneurs must understand market needs. Innovation drives business success in competitive industries.',
                'imageUrl' => 'https://www.pixelstalk.net/wp-content/uploads/images5/4K-Programming-Wallpaper-HD.jpg',
                'category' => 'Programming'
            ],
            [
                'title' => 'The Power of Mindfulness in Daily Life',
                'content' => 'Mental health awareness is growing worldwide. Seeking help and practicing mindfulness improve well-being. Breaking the stigma around mental health is important.',
                'imageUrl' => 'https://w0.peakpx.com/wallpaper/113/678/HD-wallpaper-financial-applications-online-banking-e-wallet-banking-finance-concepts.jpg',
                'category' => 'Finance'
            ],
            [
                'title' => 'What Makes a Business Stand Out in 2025',
                'content' => 'Machine learning is transforming industries. AI analyzes large datasets for insights. Its applications in healthcare, finance, and security are expanding rapidly.',
                'imageUrl' => 'https://w0.peakpx.com/wallpaper/274/795/HD-wallpaper-travel-adventure-words-inscription-hand.jpg',
                'category' => 'Travel'
            ],
            [
                'title' => 'Advancements in Medical Science and Healthcare',
                'content' => 'Exploring new destinations fosters appreciation for diversity. Travel teaches adaptability and broadens our perspectives. History and nature shape unforgettable journeys.',
                'imageUrl' => 'https://images.pexels.com/photos/132477/pexels-photo-132477.jpeg?cs=srgb&dl=pexels-inspiredimages-132477.jpg&fm=jpg',
                'category' => 'Science'
            ],
            [
                'title' => 'How Music Influences Human Emotions',
                'content' => 'Technology is evolving rapidly, shaping our future. AI, blockchain, and IoT are changing industries. Businesses must adapt to remain competitive.',
                'imageUrl' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZW50ZXJ0YWlubWVudHxlbnwwfHwwfHx8MA%3D%3D',
                'category' => 'Entertainment'
            ],
            [
                'title' => 'Machine Learning Applications in Everyday Life',
                'content' => 'Machine learning enhances daily life through virtual assistants, recommendation systems, fraud detection, and healthcare predictions. It also powers self-driving cars, chatbots, social media feeds, spam filtering, and smart home automation for a seamless experience.',
                'imageUrl'=>'https://c4.wallpaperflare.com/wallpaper/620/839/767/gifted-4k-download-best-hd-desktop-wallpaper-preview.jpg',
                'category' => 'Education'
            ],
            [
                'title' => 'Essential Web Development Trends for 2025',
                'content' => 'Maintaining good health requires exercise and a balanced diet. Mental well-being is equally important. Small daily habits contribute to a healthier life.',
                'imageUrl' => 'https://wallpaper.forfun.com/fetch/7c/7c7ff6f952598ed3e0188bb88a856300.jpeg',
                'category' => 'Technology'
            ],
            [
                'title' => 'The Growing Awareness of Mental Health',
                'content' => 'Responsive web design ensures accessibility on all devices. A mobile-first approach is crucial. Optimized websites improve user experience and engagement.',
                'imageUrl' => 'https://e0.pxfuel.com/wallpapers/686/841/desktop-wallpaper-jubin-nautiyal-and-pritam-size.jpg',
                'category' => 'Entertainment'
            ],
            [
                'title' => 'Solo Travel: A Journey to Self-Discovery',
                'content' => 'The gaming industry is booming worldwide. Esports competitions attract millions of players. Video games offer entertainment and cognitive benefits.',
                'imageUrl' => 'https://wallpapers.com/images/hd/cool-science-desktop-themed-art-lp6txk7ycdciujvw.jpg',
                'category' => 'Science'
            ],
            [
                'title' => 'Understanding Credit Scores and Financial Planning',
                'content'=>'Understanding credit scores is essential for managing financial health, as they impact loan approvals, interest rates, and financial opportunities. Effective financial planning helps improve credit scores by ensuring timely payments, reducing debt, and maintaining a balanced credit utilization ratio.',
                'imageUrl' => 'https://c4.wallpaperflare.com/wallpaper/767/594/322/books-library-bokeh-depth-of-field-wallpaper-preview.jpg',
                'category' => 'Education'
            ],
            [
                'title' => 'The Rise of E-learning Platforms',
                'content' => 'Front-end development enhances user experiences. React, Vue, and Angular are popular frameworks. A strong grasp of HTML, CSS, and JavaScript is essential.',
                'imageUrl' => 'https://4kwallpapers.com/images/walls/thumbs/21448.jpg',
                'category' => 'Lifestyle'
            ],
            [
                'title' => 'How to Build a Strong Personal Brand',
                'content' => 'Scientific research drives technological advancements. Innovations in renewable energy and medicine impact the future. Collaboration accelerates global progress.',
                'imageUrl' => 'https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dHJhdmVsJTIwd2FsbHBhcGVyfGVufDB8fDB8fHww',
                'category' => 'Travel'
            ],
            [
                'title' => 'The Future of Renewable Energy Technologies',
                'content' => 'Continuous learning enhances career prospects. Certifications and networking open new doors. Staying updated with industry trends ensures professional growth.',
                'imageUrl' => 'https://wallpapers.com/images/hd/doctor-with-globe-in-hand-hd-medical-dff7ahiwc5xsfjm0.jpg',
                'category' => 'Health'
            ],
            [
                'title' => 'How the Gaming Industry is Evolving',
                'content' => 'A balanced lifestyle includes work, rest, and recreation. Mindfulness and self-care reduce stress. Setting boundaries leads to a fulfilling life.',
                'imageUrl' => 'https://c1.wallpaperflare.com/preview/411/87/644/chart-trading-courses-forex.jpg',
                'category' => 'Finance'
            ],
        ];
        
        $categories=Category::all()->keyBy('category_name');
        foreach($blog_posts as $item)
        {
          $category = $categories[$item['category']] ?? null;
            post::create([
              'category_id'=>$category->id,
               'title'=>$item['title'],
               'content'=>$item['content'],
               'img_url'=>$item['imageUrl'],
            ]);
            }
    }
}
