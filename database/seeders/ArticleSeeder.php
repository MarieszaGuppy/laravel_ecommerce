<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'The Art of Effortless Elegance: Mastering Timeless Style',
            'image' => 'firstblog.jpg',
            'author' => 'Timmy Fall',
            'category' => 'Fashion',
            'body' => 'Effortless elegance is about embracing simplicity, quality, and confidence to create a timeless style that transcends fleeting trends. It begins with investing in high-quality pieces made from durable fabrics like cotton, linen, or wool, ensuring they not only last but also elevate your look. Neutral tones—such as black, white, beige, and navy—form the foundation of an elegant wardrobe, offering versatility and ease of pairing. Proper fit is crucial, as well-tailored garments enhance your natural shape and add polish to any outfit. Accessories, when chosen carefully, can refine your appearance—think a sleek watch, simple earrings, or a classic leather handbag. Minimal makeup and neat hairstyles, like loose waves or a low bun, further emphasize understated sophistication while allowing your natural beauty to shine. Confidence ties everything together, as wearing your clothes with poise and authenticity completes the look. By focusing on timeless pieces and sustainable practices, you not only craft a style that reflects grace and refinement but also make a conscious choice to prioritize quality over quantity, creating a wardrobe that truly lasts.',
            'slug' => 'mastering-timeless-style',
        ]);

        Article::create([
            'title' => 'Neon is the New Black: How Bold Colors Are Taking Over Fashion',
            'image' => 'secondblog.jpg',
            'author' => 'Shane Dine',
            'category' => 'Trend',
            'body' => 'Neon is making a bold comeback in 2024, dominating streetwear and high fashion with vibrant hues like electric pinks and fluorescent yellows. This trend is all about standing out and embracing individuality, as seen in standout pieces like oversized bucket hats and fringed jackets. Neon works best as a statement piece—whether it’s a jacket, hat, or accessory—balanced with neutral tones or layered with playful prints for a dynamic look. Beyond its visual impact, neon symbolizes a cultural shift toward self-expression and playfulness, making it perfect for a generation that loves to be seen and heard. Ready to glow? It’s time to embrace the neon revolution!',
            'slug' => 'neon-is-the-new-black',
        ]);
    }
}
