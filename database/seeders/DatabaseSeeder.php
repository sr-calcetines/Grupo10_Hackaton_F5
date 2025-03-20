<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Housing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //Users seed
         User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '12345678',
            'isAdmin' => 1
        ]);

        User::create([
            'name' => 'User1',
            'email' => 'user1@user.com',
            'password' => '12345678',
            'isAdmin' => 0
        ]);

        User::create([
            'name' => 'User2',
            'email' => 'user2@user.com',
            'password' => '12345678',
            'isAdmin' => 0
        ]);

        User::create([
            'name' => 'User3',
            'email' => 'user3@user.com',
            'password' => '12345678',
            'isAdmin' => 0
        ]);

        User::create([
            'name' => 'User4',
            'email' => 'user4@user.com',
            'password' => '12345678',
            'isAdmin' => 0
        ]);

        //Housing seed
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468367/children/pepe/yeqfp71qvvtvjoi4hxeo.jpg',
            'name' => 'St Mark Street, 24',
            'description' => 'Located in an exclusive residential neighborhood, this impressive home combines contemporary design, spaciousness, and comfort in one. With 250 m² of construction on a 400 m² lot, this property is ideal for those seeking a spacious and functional home.',
            'rooms' => 6,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 250,
            'price' => 300000,
            'contactMail' => 'fakemail@example.com'
        ]);

        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468367/children/pepe/msenehwd1h6l200rhuay.jpg',
            'name' => 'Maple Avenue, 12',
            'description' => 'A charming house located in a quiet neighborhood, featuring modern amenities and a spacious backyard.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 200,
            'price' => 250000,
            'contactMail' => 'maple12@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468367/children/pepe/oghbmybwqaafr32zd2lj.jpg',
            'name' => 'Oak Street, 45',
            'description' => 'This elegant home offers a perfect blend of comfort and style, with a large living area and a modern kitchen.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 300,
            'price' => 350000,
            'contactMail' => 'oak45@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468367/children/pepe/aogjkkuuefgsgo6nmhax.jpg',
            'name' => 'Pine Lane, 78',
            'description' => 'A cozy home with a warm atmosphere, ideal for families looking for a peaceful environment.',
            'rooms' => 4,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'size' => 150,
            'price' => 200000,
            'contactMail' => 'pine78@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468367/children/pepe/al2e9bazbmw4ddzmek9n.jpg',
            'name' => 'Cedar Road, 34',
            'description' => 'This luxurious home features a large garden, a swimming pool, and a spacious interior design.',
            'rooms' => 7,
            'bedrooms' => 5,
            'bathrooms' => 4,
            'size' => 400,
            'price' => 500000,
            'contactMail' => 'cedar34@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468367/children/pepe/nwfbkigiw8lwxrz1u7rj.jpg',
            'name' => 'Elm Street, 56',
            'description' => 'A modern home with an open floor plan, perfect for entertaining guests and family gatherings.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 220,
            'price' => 280000,
            'contactMail' => 'elm56@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468367/children/pepe/oghoxvx5t3lxqktxurmr.jpg',
            'name' => 'Birch Avenue, 89',
            'description' => 'This stylish home offers a perfect balance of modern design and comfortable living spaces.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 320,
            'price' => 370000,
            'contactMail' => 'birch89@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/kbehziejhknobgxlosev.jpg',
            'name' => 'Willow Lane, 23',
            'description' => 'A beautiful home with a large backyard and a modern kitchen, perfect for family living.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 240,
            'price' => 290000,
            'contactMail' => 'willow23@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/o7q7fmjoc0molmqdpsjc.jpg',
            'name' => 'Chestnut Street, 67',
            'description' => 'This spacious home offers a large living area, a modern kitchen, and a beautiful garden.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 330,
            'price' => 380000,
            'contactMail' => 'chestnut67@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/sajsazfsabxkynpopfzq.jpg',
            'name' => 'Poplar Avenue, 90',
            'description' => 'A modern home with a sleek design, offering a comfortable and stylish living experience.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 250,
            'price' => 300000,
            'contactMail' => 'poplar90@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/qk2xbj7jcbpcu8pybyfd.jpg',
            'name' => 'Sycamore Road, 11',
            'description' => 'This elegant home features a large garden, a modern kitchen, and a spacious living area.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 340,
            'price' => 390000,
            'contactMail' => 'sycamore11@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/enpdl52qwnpvdyqn4n6c.jpg',
            'name' => 'Magnolia Street, 22',
            'description' => 'A charming home with a cozy atmosphere, perfect for those seeking a peaceful living environment.',
            'rooms' => 4,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'size' => 160,
            'price' => 210000,
            'contactMail' => 'magnolia22@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/lan52f2r1okjz371dxeb.jpg',
            'name' => 'Juniper Lane, 33',
            'description' => 'This modern home offers a perfect blend of comfort and style, with a large living area and a modern kitchen.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 230,
            'price' => 270000,
            'contactMail' => 'juniper33@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/w72zyqrdtyj13viddr4o.jpg',
            'name' => 'Cypress Avenue, 44',
            'description' => 'A luxurious home with a large garden, a swimming pool, and a spacious interior design.',
            'rooms' => 7,
            'bedrooms' => 5,
            'bathrooms' => 4,
            'size' => 410,
            'price' => 510000,
            'contactMail' => 'cypress44@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/twlwlphf41hwgfzkrfu4.jpg',
            'name' => 'Redwood Street, 55',
            'description' => 'This stylish home offers a perfect balance of modern design and comfortable living spaces.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 350,
            'price' => 400000,
            'contactMail' => 'redwood55@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468366/children/pepe/ja1upxqhkvcq96ajtckm.jpg',
            'name' => 'Spruce Lane, 66',
            'description' => 'A beautiful home with a large backyard and a modern kitchen, perfect for family living.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 260,
            'price' => 310000,
            'contactMail' => 'spruce66@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/rbw7chhjlifdm6jiqe3t.jpg',
            'name' => 'Fir Avenue, 77',
            'description' => 'This spacious home offers a large living area, a modern kitchen, and a beautiful garden.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 360,
            'price' => 410000,
            'contactMail' => 'fir77@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/b0igsgkmg0gahlfgcu5z.jpg',
            'name' => 'Hemlock Street, 88',
            'description' => 'A modern home with a sleek design, offering a comfortable and stylish living experience.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 270,
            'price' => 320000,
            'contactMail' => 'hemlock88@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/tutmtguyqj99ioxbmjfc.jpg',
            'name' => 'Ash Lane, 99',
            'description' => 'This elegant home features a large garden, a modern kitchen, and a spacious living area.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 370,
            'price' => 420000,
            'contactMail' => 'ash99@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/arhhryboiooaldbqoxbi.jpg',
            'name' => 'Beech Avenue, 101',
            'description' => 'A charming home with a cozy atmosphere, perfect for those seeking a peaceful living environment.',
            'rooms' => 4,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'size' => 170,
            'price' => 220000,
            'contactMail' => 'beech101@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/kdzed3grx1iyndgpnlkc.jpg',
            'name' => 'Walnut Street, 202',
            'description' => 'This modern home offers a perfect blend of comfort and style, with a large living area and a modern kitchen.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 280,
            'price' => 330000,
            'contactMail' => 'walnut202@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/sglwhla0feefeja6gaed.jpg',
            'name' => 'Chestnut Avenue, 303',
            'description' => 'A luxurious home with a large garden, a swimming pool, and a spacious interior design.',
            'rooms' => 7,
            'bedrooms' => 5,
            'bathrooms' => 4,
            'size' => 420,
            'price' => 520000,
            'contactMail' => 'chestnut303@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/bmwin1qeyggx8vmhmdoe.jpg',
            'name' => 'Pine Street, 404',
            'description' => 'This stylish home offers a perfect balance of modern design and comfortable living spaces.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 380,
            'price' => 430000,
            'contactMail' => 'pine404@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/y5v3vxvsjmh0vwkthl8f.jpg',
            'name' => 'Oak Lane, 505',
            'description' => 'A beautiful home with a large backyard and a modern kitchen, perfect for family living.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 290,
            'price' => 340000,
            'contactMail' => 'oak505@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/wtfhebqieq7dpzhyel5v.jpg',
            'name' => 'Maple Road, 606',
            'description' => 'This spacious home offers a large living area, a modern kitchen, and a beautiful garden.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 390,
            'price' => 440000,
            'contactMail' => 'maple606@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/ia8khi6wfkb5idstqtms.jpg',
            'name' => 'Cedar Avenue, 707',
            'description' => 'A modern home with a sleek design, offering a comfortable and stylish living experience.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 300,
            'price' => 350000,
            'contactMail' => 'cedar707@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/fifo80pontmjtlchygqv.jpg',
            'name' => 'Elm Lane, 808',
            'description' => 'This elegant home features a large garden, a modern kitchen, and a spacious living area.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 400,
            'price' => 450000,
            'contactMail' => 'elm808@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468365/children/pepe/mrqvaolpxtabxx1dqwrx.jpg',
            'name' => 'Birch Street, 909',
            'description' => 'A charming home with a cozy atmosphere, perfect for those seeking a peaceful living environment.',
            'rooms' => 4,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'size' => 180,
            'price' => 230000,
            'contactMail' => 'birch909@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/tx9dj1r4kcwxk0hpsa5q.jpg',
            'name' => 'Willow Avenue, 1010',
            'description' => 'This modern home offers a perfect blend of comfort and style, with a large living area and a modern kitchen.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 310,
            'price' => 360000,
            'contactMail' => 'willow1010@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/hsbinad6vpd6x8ydqxbx.jpg',
            'name' => 'Chestnut Lane, 1111',
            'description' => 'A luxurious home with a large garden, a swimming pool, and a spacious interior design.',
            'rooms' => 7,
            'bedrooms' => 5,
            'bathrooms' => 4,
            'size' => 430,
            'price' => 530000,
            'contactMail' => 'chestnut1111@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/pxp8cula6ct6pvpnozro.jpg',
            'name' => 'Pine Avenue, 1212',
            'description' => 'This stylish home offers a perfect balance of modern design and comfortable living spaces.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 410,
            'price' => 460000,
            'contactMail' => 'pine1212@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/gjnaiq9ikfvwzmgd0q7l.jpg',
            'name' => 'Oak Road, 1313',
            'description' => 'A beautiful home with a large backyard and a modern kitchen, perfect for family living.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 320,
            'price' => 370000,
            'contactMail' => 'oak1313@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/fu97wwzkntrtaynhszgp.jpg',
            'name' => 'Maple Lane, 1414',
            'description' => 'This spacious home offers a large living area, a modern kitchen, and a beautiful garden.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 420,
            'price' => 470000,
            'contactMail' => 'maple1414@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/fiviyslpojpmpx9evejy.jpg',
            'name' => 'Cedar Street, 1515',
            'description' => 'A modern home with a sleek design, offering a comfortable and stylish living experience.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 330,
            'price' => 380000,
            'contactMail' => 'cedar1515@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/jn7bmgskdvnziewecgq2.jpg',
            'name' => 'Elm Avenue, 1616',
            'description' => 'This elegant home features a large garden, a modern kitchen, and a spacious living area.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 430,
            'price' => 480000,
            'contactMail' => 'elm1616@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468364/children/pepe/xnx7dko3octvfedndu67.jpg',
            'name' => 'Birch Lane, 1717',
            'description' => 'A charming home with a cozy atmosphere, perfect for those seeking a peaceful living environment.',
            'rooms' => 4,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'size' => 190,
            'price' => 240000,
            'contactMail' => 'birch1717@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/olh4mwibyclhqx67orq4.jpg',
            'name' => 'Willow Road, 1818',
            'description' => 'This modern home offers a perfect blend of comfort and style, with a large living area and a modern kitchen.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 340,
            'price' => 390000,
            'contactMail' => 'willow1818@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/xfmrhxafjjpfzw10bwpx.jpg',
            'name' => 'Chestnut Avenue, 1919',
            'description' => 'A luxurious home with a large garden, a swimming pool, and a spacious interior design.',
            'rooms' => 7,
            'bedrooms' => 5,
            'bathrooms' => 4,
            'size' => 440,
            'price' => 540000,
            'contactMail' => 'chestnut1919@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/j1jn2cxnfjt6kebsikn2.jpg',
            'name' => 'Pine Lane, 2020',
            'description' => 'This stylish home offers a perfect balance of modern design and comfortable living spaces.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 450,
            'price' => 490000,
            'contactMail' => 'pine2020@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/kxnrjrmzidwfv1vgllxh.jpg',
            'name' => 'Oak Avenue, 2121',
            'description' => 'A beautiful home with a large backyard and a modern kitchen, perfect for family living.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 350,
            'price' => 400000,
            'contactMail' => 'oak2121@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/hvzxp0pmo2paunjcq2ao.jpg',
            'name' => 'Maple Street, 2222',
            'description' => 'This spacious home offers a large living area, a modern kitchen, and a beautiful garden.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 460,
            'price' => 500000,
            'contactMail' => 'maple2222@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/u5qfrblzylhf6p1xlfdi.jpg',
            'name' => 'Cedar Lane, 2323',
            'description' => 'A modern home with a sleek design, offering a comfortable and stylish living experience.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 360,
            'price' => 410000,
            'contactMail' => 'cedar2323@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/ppmyq907pcxwlyou71ty.jpg',
            'name' => 'Elm Road, 2424',
            'description' => 'This elegant home features a large garden, a modern kitchen, and a spacious living area.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 470,
            'price' => 510000,
            'contactMail' => 'elm2424@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/j4tmwppsclfqwky4kzoa.jpg',
            'name' => 'Birch Avenue, 2525',
            'description' => 'A charming home with a cozy atmosphere, perfect for those seeking a peaceful living environment.',
            'rooms' => 4,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'size' => 200,
            'price' => 250000,
            'contactMail' => 'birch2525@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/ui4h9yvo8igfl23glabr.jpg',
            'name' => 'Willow Lane, 2626',
            'description' => 'This modern home offers a perfect blend of comfort and style, with a large living area and a modern kitchen.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 370,
            'price' => 420000,
            'contactMail' => 'willow2626@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468363/children/pepe/ja3eu9jbs7aojjwdatnv.jpg',
            'name' => 'Chestnut Road, 2727',
            'description' => 'A luxurious home with a large garden, a swimming pool, and a spacious interior design.',
            'rooms' => 7,
            'bedrooms' => 5,
            'bathrooms' => 4,
            'size' => 480,
            'price' => 550000,
            'contactMail' => 'chestnut2727@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468362/children/pepe/svlt1zpgofk54p0ujmln.jpg',
            'name' => 'Pine Avenue, 2828',
            'description' => 'This stylish home offers a perfect balance of modern design and comfortable living spaces.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 490,
            'price' => 520000,
            'contactMail' => 'pine2828@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468362/children/pepe/xur5v1skxk8gvu7v5xjo.jpg',
            'name' => 'Oak Lane, 2929',
            'description' => 'A beautiful home with a large backyard and a modern kitchen, perfect for family living.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 380,
            'price' => 430000,
            'contactMail' => 'oak2929@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468362/children/pepe/sz28ztea2mmy33epmxmf.jpg',
            'name' => 'Maple Road, 3030',
            'description' => 'This spacious home offers a large living area, a modern kitchen, and a beautiful garden.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 500,
            'price' => 530000,
            'contactMail' => 'maple3030@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468362/children/pepe/ggvuynppxp1rnokvwooo.jpg',
            'name' => 'Cedar Avenue, 3131',
            'description' => 'A modern home with a sleek design, offering a comfortable and stylish living experience.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 390,
            'price' => 440000,
            'contactMail' => 'cedar3131@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468362/children/pepe/qugfh7n4wc5ccdcnjtwd.jpg',
            'name' => 'Elm Lane, 3232',
            'description' => 'This elegant home features a large garden, a modern kitchen, and a spacious living area.',
            'rooms' => 6,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'size' => 510,
            'price' => 540000,
            'contactMail' => 'elm3232@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468362/children/pepe/ex152wkumvxtlestslgr.jpg',
            'name' => 'Birch Street, 3333',
            'description' => 'A charming home with a cozy atmosphere, perfect for those seeking a peaceful living environment.',
            'rooms' => 4,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'size' => 210,
            'price' => 260000,
            'contactMail' => 'birch3333@example.com'
        ]);
        
        Housing::create([
            'img' => 'https://res.cloudinary.com/dg28513f0/image/upload/v1742468362/children/pepe/kmyaonlopc5gj2uc7wyj.jpg',
            'name' => 'Willow Avenue, 3434',
            'description' => 'This modern home offers a perfect blend of comfort and style, with a large living area and a modern kitchen.',
            'rooms' => 5,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'size' => 400,
            'price' => 450000,
            'contactMail' => 'willow3434@example.com'
        ]);
    }
}