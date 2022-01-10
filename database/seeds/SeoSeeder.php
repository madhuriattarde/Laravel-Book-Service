<?php

use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('seodata')->truncate();

    	$seodata = array(
    // myghar-home-web
    		['webpage_id' => '1', 'version' => '1.0', 'title' => 'Top Home Based Services | MyGharSeva.Com', 'meta_description' => 'Book expert professional for home based services such as beauty,painting,pest control,AC repair,appliance repair & many more', 'meta_keyword' => 'expert home based services,book beauty services at home,book beauticians online, professional painting services,top AC installation services, best pest control services in India,appliance repair company,movers & packers services at home, house cleaning services at home, expert professional for home based needs', 'page_type' => 'Home', 'canonical' => 'https://www.mygharseva.com/#/home', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'One Stop Solutions for Home Based Services', 'opengraph_description' => 'Book expert professional for home based services such as beauty,painting,pest control,AC repair,appliance repair,movers & packers,house cleaning & many more', 'opengraph_url' => 'https://www.mygharseva.com/#/home', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'One Stop Solutions for Home Based Services', 'twitter_description' => 'Book expert professional for home based services such as beauty,painting,pest control,AC repair,appliance repair,movers & packers,house cleaning & many more', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/home', 'schema_type' => 'https://schema.org/WebPage', 'schema_name' => 'Book Home Based Services', 'schema_description' => 'One Stop Solutions for Home Based Services', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'One Stop Solutions for Home Based Services', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // beauty
    		['webpage_id' => '11', 'version' => '1.0', 'title' => 'Avail Best Beauty Services | Salon at Home | MyGharSeva.Com', 'meta_description' => 'Book expert professional for beauty salon services such as facial, waxing,spa, hair color, hair rebonding  at doorstep', 'meta_keyword' => 'top beauty services in pune, salon at home services, hairstyles for women, beauty services at home, home based beauty salon, hair color at home, beauty services for women, facial at home, professional beauty services, waxing at home, body waxing for women', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/beauty', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Beauty Expert is just a call away', 'opengraph_description' => 'Book expert professional for beauty salon services such as facial, waxing,spa, hair color, hair rebonding  at doorstep', 'opengraph_url' => 'https://www.mygharseva.com/#/service/beauty', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Beauty Expert is just a call away', 'twitter_description' => 'Book expert professional for beauty salon services such as facial, waxing,spa, hair color, hair rebonding  at doorstep', 'twitter_image' => 'Book Beauty Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/beauty', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Beauty Services', 'schema_description' => 'Beauty Expert is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Beauty Expert is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // appliance-rep
    		['webpage_id' => '10', 'version' => '1.0', 'title' => 'Top AC Installation | Home Appliance Repair | MyGharSeva.com', 'meta_description' => 'Book experts to fix appliances like AC repair, Mobile repair, Laptop repair, Refrigerator repair, Microwave repair with verified professionals', 'meta_keyword' => 'top appliance repair services in india, best AC repair & installation services,expert laptop repair services at home, top expert mobile repair services, best microwave repair services, home based repair services, Expert TV repair services, verified professional washing machine repair services', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/appliance-repair', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Fixing AC & Home Appliances is just a call away', 'opengraph_description' => 'Book experts to fix appliances like AC repair, Mobile repair, Laptop repair, Refrigerator repair, Microwave repair with verified & reliable professionals', 'opengraph_url' => 'https://www.mygharseva.com/#/service/appliance-repair', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Fixing AC & Home Appliances is just a call away', 'twitter_description' => 'Book experts to fix appliances like AC repair, Mobile repair, Laptop repair, Refrigerator repair, Microwave repair with verified & reliable professionals', 'twitter_image' => 'Book Appliance Repair Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/appliance-repair', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Appliance Repair Services', 'schema_description' => 'Fixing AC & Home Appliances is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Fixing AC & Home Appliances is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // pest-control
    		['webpage_id' => '13', 'version' => '1.0', 'title' => 'Herbal Pest Control Service | WHO Certified Agents | MyGharSeva.com', 'meta_description' => 'Book top pest control company that provides complete solutions for bed bugs, cockroaches, insects, termites by certified WHO agents', 'meta_keyword' => 'local pest control treatment companies pune, herbal pest control services, WHO certifed agent for pest control,bed bug elimination services,insect pest control company, non toxic pest control services, best home pest control product, cockroaches pest control services,affordable pest solution services at home, pest control professionals', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/pest-control', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Pest Control Service is just a call away', 'opengraph_description' => 'Book top pest control company that provides complete solutions for bed bugs, cockroaches, insects, termites with the help of certified WHO agents', 'opengraph_url' => 'https://www.mygharseva.com/#/service/pest-control', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Pest Control Service is just a call away', 'twitter_description' => 'Book top pest control company that provides complete solutions for bed bugs, cockroaches, insects, termites with the help of certified WHO agents', 'twitter_image' => 'Book Pest Control Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/pest-control', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Pest Control Services', 'schema_description' => 'Pest Control Service is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Pest Control Service is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    //	plumbing
    		['webpage_id' => '14', 'version' => '1.0', 'title' => 'Expert Local Plumber for Home Repair | MyGharSeva.com', 'meta_description' => 'Book expert plumbing services for urgent home repairs such as toilet leakage, tap, flush tank,blockage,washbasin,shower.', 'meta_keyword' => 'book plumber at home,call emergecy plumbing services, blocked toilet repair work,expert 24/7 plumbing services in india, top affordable repair services, plumbing servcies at doorstep, fix leakage with expert plumbers, drain cleaning services on urgent basis, toilet repair services,repair clogged toilet urgently', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/plumbing', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Repair the disrepair. Expert plumber is just a call away', 'opengraph_description' => 'Book expert plumbing services for urgent home repairs such as toilet leakage, faucets, tap, flush tank,blockage,washbasin,shower.Plumber also Convert Indian To Western Toilet.', 'opengraph_url' => 'https://www.mygharseva.com/#/service/plumbing', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Repair the disrepair. Expert plumber is just a call away', 'twitter_description' => 'Book expert plumbing services for urgent home repairs such as toilet leakage, faucets, tap, flush tank,blockage,washbasin,shower.Plumber also Convert Indian To Western Toilet.', 'twitter_image' => 'Book Plumbing Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/plumbing', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Plumbing Services', 'schema_description' => 'Repair the disrepair. Expert plumber is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Repair the disrepair. Expert plumber is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // electrician
    		['webpage_id' => '15', 'version' => '1.0', 'title' => 'Expert Professional Electrician to fix issue | MyGharSeva.com', 'meta_description' => 'Book verified electrician services to repair the electric products such as fan, tubelight,geyser,inverter repair,wiring or rewiring at your doorstep.', 'meta_keyword' => 'verified electrcial services at home, inverter repair at home, local geyser repair services need electrician services on urgent basis, electrical services at doorstep,electrician for residential or commercial, local electrician for repairwork, top electric repair services in india,electrician for wiring at doorstep', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/electrician', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Fix the shock issue. Expert electrician is just a call away', 'opengraph_description' => 'Book verified electrician services to repair or replace the electric products such as fan, tubelight,geyser,inverter repair,wiring or rewiring at your doorstep.', 'opengraph_url' => 'https://www.mygharseva.com/#/service/electrician', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Fix the shock issue. Expert electrician is just a call away', 'twitter_description' => 'Book verified electrician services to repair or replace the electric products such as fan, tubelight,geyser,inverter repair,wiring or rewiring at your doorstep.', 'twitter_image' => 'Book Electrician Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/electrician', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Electrician Services', 'schema_description' => 'Fix the shock issue. Expert electrician is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Fix the shock issue. Expert electrician is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // carpenter
    		['webpage_id' => '18', 'version' => '1.0', 'title' => 'Expert carpenter Services for Home Furniture | MyGharSeva.com ', 'meta_description' => 'Book carpenter handyman for all the carpentry work such as installing furniture’s work, door work, window work, assembly work at home', 'meta_keyword' => 'book carpentry services online, local handyman carpenter service, carpenter handyman work for home, carpentry service for home job, local carpenter for furniture work, furniture installation work, furniture assembly services, carpenter for door work, carpenter for repairing furniture.', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/carpenter', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Fixing the older wood or making fresh. Expert carpenter is just a call away', 'opengraph_description' => 'Book carpenter handyman for all the carpentry work such as installing furniture’s work, door work, window work, assembly work at home', 'opengraph_url' => 'https://www.mygharseva.com/#/service/carpenter', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Fixing the older wood or making fresh. Expert carpenter is just a call away', 'twitter_description' => 'Book carpenter handyman for all the carpentry work such as installing furniture’s work, door work, window work, assembly work at home', 'twitter_image' => 'Book Carpenter Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/carpenter', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Carpenter Services', 'schema_description' => 'Fixing the older wood or making fresh. Expert carpenter is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Fixing the older wood or making fresh. Expert carpenter is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // painting
    		['webpage_id' => '19', 'version' => '1.0', 'title' => 'Best Professional Painters in India | MyGharSeva.com', 'meta_description' => 'Paint your house by choosing customized colors for interior, exterior or both with superior quality at reasonable prices ', 'meta_keyword' => 'book painting services with superior quality, professional painters at reasonable prices, interior painting services by verified experts,book exterior house paintings ervices,paint a house with customized colors', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/painting', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Ready to Paint your house? We are just a call away', 'opengraph_description' => 'Paint your house by choosing customized colors for interior, exterior or both with superior quality at reasonable prices.', 'opengraph_url' => 'https://www.mygharseva.com/#/service/painting', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Ready to Paint your house? We are just a call away', 'twitter_description' => 'Paint your house by choosing customized colors for interior, exterior or both with superior quality at reasonable prices ', 'twitter_image' => 'Book Painting Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/painting', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Painting Services', 'schema_description' => 'Ready to Paint your house? We are just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Ready to Paint your house? We are just a call away!', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // home cleaning
    		['webpage_id' => '16', 'version' => '1.0', 'title' => 'Top Home Cleaning Services for Home | MyGharSeva.com', 'meta_description' => 'Call experts for house cleaning services such as Carpet cleaning, sofa shampooing, full house cleaning at reasonable prices.', 'meta_keyword' => 'home cleaning services at reasobale prices, expert cleaning services for home, carpert cleaning services by verified experts,sofa shampooing services online, book full house cleaning services.', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/home-cleaning', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Save time! Cleaning experts is just a call away', 'opengraph_description' => 'Call experts for house cleaning services such as Carpet cleaning, sofa shampooing, full house cleaning at reasonable prices.', 'opengraph_url' => 'https://www.mygharseva.com/#/service/home-cleaning', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Save time! Cleaning experts is just a call away', 'twitter_description' => 'Call experts for house cleaning services such as Carpet cleaning, sofa shampooing, full house cleaning at reasonable prices.', 'twitter_image' => 'Book Home Cleaning Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/home-cleaning', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Home Cleaning Services', 'schema_description' => 'Save time! Cleaning experts is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Save time! Cleaning experts is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // Movers & Packers
    		['webpage_id' => '12', 'version' => '1.0', 'title' => 'Reasonable Movers & Packers Services | Relocation Packages | MyGharSeva.com', 'meta_description' => 'Book safe movers & packers for home based services as per your relocation needs in any part of India with trusted  professionals.', 'meta_keyword' => 'book professional movers & packers services,safe packers & movers services,relocation packers & movers services, home shifting solution in India, best movers & packers with packaging.', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/movers-packers', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Sit Back & Relax. Movers & packers is just a call away', 'opengraph_description' => 'Book safe movers & packers for home based services as per your relocation needs in any part of India with trusted professionals', 'opengraph_url' => 'https://www.mygharseva.com/#/service/movers-packers', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Sit Back & Relax. Movers & packers is just a call away', 'twitter_description' => 'Book safe movers & packers for home based services as per your relocation needs in any part of India with trusted  professionals', 'twitter_image' => 'Book Movers & Packers Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/movers-packers', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book packers & movers Services', 'schema_description' => 'Sit Back & Relax. Movers & packers is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Sit Back & Relax. Movers & packers is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // pooja
    		['webpage_id' => '17', 'version' => '1.0', 'title' => 'Pooja Services for Home | Experienced Pandits & Guruji | MyGharSeva.com', 'meta_description' => 'Book pooja services such as bhumipujan,hosuewarming-grihpravesh,satyanarayan,wedding,vastu shanti or others by expereinced pandits/gurujis', 'meta_keyword' => 'book pooja services online, panditji for home based pooja, expert guruji for vastu puja, pooja services with reasonbale prices, best pooja services by panditji, vastu shanti pooja services in India', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/pooja', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Bring expert Guruiji’s at Home. Pooja Service is just a call away', 'opengraph_description' => 'Book pooja services such as bhumipujan,hosuewarming-grihpravesh,satyanarayan,wedding,vastu shanti or others by expereinced pandits/gurujis', 'opengraph_url' => 'https://www.mygharseva.com/#/service/pooja', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Bring expert Gurji’s at Home. Pooja Service is just a call away', 'twitter_description' => 'Book pooja services such as bhumipujan,hosuewarming-grihpravesh,satyanarayan,wedding,vastu shanti or others by expereinced pandits/gurujis', 'twitter_image' => 'Book Pooja Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/pooja', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Pooja Services', 'schema_description' => 'Bring expert Guruji’s at Home. Pooja Service is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Bring expert Guruji’s at Home. Pooja Service is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // interior serivices
    		['webpage_id' => '20', 'version' => '1.0', 'title' => 'Professional Interior Decoration Services | MyGharSeva.com', 'meta_description' => 'Book popular interior decorator services for any wall painting, furnitures, painting sculptures or other home decoration', 'meta_keyword' => 'book interior decorator services online, interior services with customized packages,popular interior service solutions, home redmodeling services by experts, office interior improvements by experts,book interior design consultant', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/interior-services', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Furnish ideas into reality. Interior expert is just a call away', 'opengraph_description' => 'Book popular interior decorator services for any wall painting, furnitures, painting sculptures or other home decoration', 'opengraph_url' => 'https://www.mygharseva.com/#/service/interior-services', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Furnish ideas into reality. Interior expert is just a call away', 'twitter_description' => 'Book popular interior decorator services for any wall painting, furnitures, painting sculptures or other home decoration', 'twitter_image' => 'Book Interior Services', 'twitter_url' => 'https://www.mygharseva.com/#/service/interior-services', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Interior Services', 'schema_description' => 'Furnish ideas into reality. Interior expert is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Furnish ideas into reality. Interior expert is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // drivers on demand
    		['webpage_id' => '21', 'version' => '1.0', 'title' => 'Professional Driver on Demand at doorstep | Mygharseva.com', 'meta_description' => 'Book reliable driver services who can give a pleasurable experience when you need a driver to ride your car', 'meta_keyword' => 'book reliable driver services, driver services on your request, professional drivers for car, verified and trusted drivers at home, driver services for sedan car, driver services over weekend ', 'page_type' => 'PDP Page', 'canonical' => 'https://www.mygharseva.com/#/service/driver-on-demand', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Demand an experienced driver. Hiring Driver is just a call away', 'opengraph_description' => 'Book reliable driver services who can give a pleasurable experience when you need a driver to ride your car', 'opengraph_url' => 'https://www.mygharseva.com/#/ervice/driver-on-demand', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Demand an experienced driver. Hiring Driver is just a call away', 'twitter_description' => 'Book reliable driver services who can give a pleasurable experience when you need a driver to ride your car', 'twitter_image' => 'Book Driver Services', 'twitter_url' => 'https://www.mygharseva.com/#/ervice/driver-on-demand', 'schema_type' => 'https://schema.org/Product', 'schema_name' => 'Book Driver Services', 'schema_description' => 'Demand an experienced driver. Hiring Driver is just a call away', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Demand an experienced driver. Hiring Driver is just a call away', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // static-pages  help-center
        	['webpage_id' => '2', 'version' => '1.0', 'title' => 'Help Centre for Home Service', 'meta_description' => 'Get in touch with our help centre expert in case of website related queries', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/help-center/', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Help Centre', 'opengraph_description' => 'Get in touch with our help centre expert in case of website related queries', 'opengraph_url' => 'https://www.mygharseva.com/#/help-center/', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Help Centre', 'twitter_description' => 'Get in touch with our help centre expert in case of website related queries', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/help-center/', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => 'Help Centre', 'schema_description' => 'Build career with home based services experts to grow your career in any field of domain by leaps & bounds', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Help Centre', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // static-pages contact-us
        	['webpage_id' => '3', 'version' => '1.0', 'title' => 'Contact +91 9270890890 MyGharSeva Company', 'meta_description' => 'Connect with us for any product or order related queries, We will be glad to answer your questions', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/contact-us', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Contact +91 9270890890', 'opengraph_description' => 'Connect with us for any product or order related queries, We will be glad to answer your questions', 'opengraph_url' => 'https://www.mygharseva.com/#/contact-us', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Contact +91 9270890890', 'twitter_description' => 'Connect with us for any product or order related queries, We will be glad to answer your questions', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/contact-us', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => 'Contact +91 9270890890', 'schema_description' => 'Read more about online handyman service trends & other home based services which is growing rapidly in India', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Contact +91 9270890890', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // static-pages about-us
			['webpage_id' => '4', 'version' => '1.0', 'title' => 'About MyGharSeva Company', 'meta_description' => 'Know more about us who provides one stop solution for home based needs by exceeding expectations', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/about-us', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'About MyGharSeva', 'opengraph_description' => 'Know more about us who provides one stop solution for home based needs by exceeding expectations', 'opengraph_url' => 'https://www.mygharseva.com/#/about-us', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'About MyGharSeva ', 'twitter_description' => 'Know more about us who provides one stop solution for home based needs by exceeding expectations', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/about-us', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => 'About MyGharSeva', 'schema_description' => 'Get extra income while providing the home based services by partnering with MyGharSeva Company', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'About MyGharSeva', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // static-pages partner-with-us
            ['webpage_id' => '5', 'version' => '1.0', 'title' => 'Partner with MyGharSeva Company', 'meta_description' => 'Get extra income while providing the home based services by partnering with MyGharSeva Company', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/partner-with-us', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Partner with us', 'opengraph_description' => 'Get extra income while providing the home based services by partnering with MyGharSeva Company', 'opengraph_url' => 'https://www.mygharseva.com/#/artner-with-us', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Partner with us', 'twitter_description' => 'Get extra income while providing the home based services by partnering with MyGharSeva Company', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/artner-with-us', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => 'Partner with us', 'schema_description' => 'Log on MyGharSeva website to avail the home based services online within a single click of mouse', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Partner with us', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // static-pages terms-conditions
            ['webpage_id' => '6', 'version' => '1.0', 'title' => 'Terms & Condition for Home Service', 'meta_description' => 'Read the Terms & Condition for mygharseva company to know about the usage policy of a website', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/terms-conditions', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Terms & Conditions', 'opengraph_description' => 'Read the Terms & Condition for mygharseva company to know about the usage policy of a website', 'opengraph_url' => 'https://www.mygharseva.com/#/help-center/', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Terms & Conditions', 'twitter_description' => 'Read the Terms & Condition for mygharseva company to know about the usage policy of a website', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/terms-conditions', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => 'Terms & Conditions', 'schema_description' => 'Register with MyGharSeva to know more about the home based services and offers its available with us', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Terms & Conditions', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // static-pages privacy
            ['webpage_id' => '7', 'version' => '1.0', 'title' => 'Privacy Policy for Home Service', 'meta_description' => 'Read the privacy policy document to know about the terms & security involved in booking the online services', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/privacy', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Privacy Policy', 'opengraph_description' => 'Read the privacy policy document to know about the terms & security involved in booking the online services', 'opengraph_url' => 'https://www.mygharseva.com/#/privacy', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Privacy Policy', 'twitter_description' => 'Read the privacy policy document to know about the terms & security involved in booking the online services', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/privacy', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => 'Privacy Policy', 'schema_description' => 'Read the privacy policy document to know about the terms & security involved in booking the online services', 'schema_image' => '', 'updated_by' => 'admin', 'created_by' => 'admin', 'H1' => 'Privacy Policy', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // login page
            ['webpage_id' => '8', 'version' => '1.0', 'title' => 'Login for MyGharSeva Services', 'meta_description' => 'Log on MyGharSeva website to avail the home based services online within a single click of mouse', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/login', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Login', 'opengraph_description' => 'Log on MyGharSeva website to avail the home based services online within a single click of mouse', 'opengraph_url' => 'https://www.mygharseva.com/#/login', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Login', 'twitter_description' => 'Log on MyGharSeva website to avail the home based services online within a single click of mouse', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/login', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => 'Login', 'schema_description' => 'Log on MyGharSeva website to avail the home based services online within a single click of mouse', 'schema_image' => 'admin', 'updated_by' => 'admin', 'created_by' => '', 'H1' => 'Login', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],
    // register page
            ['webpage_id' => '9', 'version' => '1.0', 'title' => 'Register with MyGharSeva', 'meta_description' => 'Register with MyGharSeva to know more about the home based services and offers its available with us', 'meta_keyword' => 'NA', 'page_type' => 'static', 'canonical' => 'https://www.mygharseva.com/#/register', 'seocopy_block' => '', 'robots' => 'noindex', 'authorship' => 'n/a', 'opengraph_type' => 'website', 'opengraph_title' => 'Register with us', 'opengraph_description' => 'Register with MyGharSeva to know more about the home based services and offers its available with us', 'opengraph_url' => 'https://www.mygharseva.com/#/register', 'opengraph_image' => 'n/a', 'twitter_card' => 'summary', 'twitter_title' => 'Register with us', 'twitter_description' => 'Register with MyGharSeva to know more about the home based services and offers its available with us', 'twitter_image' => 'Book Home Based Services', 'twitter_url' => 'https://www.mygharseva.com/#/register', 'schema_type' => 'http://schema.org/WebPage', 'schema_name' => '', 'schema_description' => '', 'schema_image' => 'admin', 'updated_by' => 'admin', 'created_by' => '', 'H1' => 'Register with us', 'community_id' => '1', 'is_active' => '1', 'updated_at' => new DateTime, 'created_at' => new DateTime],

    	);
		DB::table('seodata')->insert($seodata);
    }
}