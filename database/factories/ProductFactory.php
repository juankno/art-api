<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $images = [
            "https://cdn.leonardo.ai/users/c8b684ab-6931-4bd0-b606-b65f441c5619/generations/2c6dff5b-9dc8-4812-b150-965fbf0d7ddc/RPG_40_Studio_portrait_of_stunning_Full_body_Ancient_Greece_in_0.jpg",
            "https://image.lexica.art/full_jpg/0afad5ed-6124-4685-af75-3ca01fc18d4d",
            "https://cdn.leonardo.ai/users/9a38a7b8-74c2-44e4-ae82-7e1b0369d70e/generations/56b5e7ec-e66c-49f4-99f3-f8ab8c6e450e/DreamShaper_v5_hill_with_altars_statues_of_gods_and_a_temple_f_0.jpg",
            "https://cdn.leonardo.ai/users/c8b684ab-6931-4bd0-b606-b65f441c5619/generations/2c6dff5b-9dc8-4812-b150-965fbf0d7ddc/RPG_40_Studio_portrait_of_stunning_Full_body_Ancient_Greece_in_0.jpg",
            "https://cdn.leonardo.ai/users/f273e98f-84c2-4113-a545-b0818aaa50d2/generations/11964555-bf5f-42d2-9245-da6cbee92ca3/RPG_40_HighResolution_MidShot_HighDefinition_Dynamic_Pose_4K_R_0.jpg",
            "https://cdn.leonardo.ai/users/9a38a7b8-74c2-44e4-ae82-7e1b0369d70e/generations/1e5c9566-6dca-4222-bbfd-bac20fe09979/Deliberate_11_Athenian_acropolis_with_Classical_greek_Caryati_3.jpg",
            "https://cdn.leonardo.ai/users/9fff616f-1898-48f1-ba18-b48d8ba080e5/generations/8a785e26-3f9f-4bd5-b6c3-605b2391c7a4/DreamShaper_v5_philosopher_value_striking_portrait_of_a_bea_0.jpg",
            "https://image.lexica.art/full_jpg/3464aa75-f8ad-4280-a0f1-82082eef9dbd",
            "https://cdn.leonardo.ai/users/b1372854-6a78-454b-946a-41f0940e089a/generations/132c4159-777d-405b-8733-20d7dc27b954/RPG_40_Athena_wearing_a_long_elegant_dresse_She_wore_a_helmet_0.jpg",
            "https://cdn.leonardo.ai/users/df2f3f0d-b3f1-4e68-bf37-ddd35e3af875/generations/039265a7-2f79-46d7-8549-ded1fab9ee41/DreamShaper_v5_a_man_from_ancient_greece_using_fire_to_keep_wa_1.jpg",
            "https://cdn.leonardo.ai/users/8c28fe23-425d-4718-9246-36e3abf89d82/generations/9df63e91-a6d3-43df-aab3-2e6f12cb84c3/RPG_40_ancient_greece_golden_ratio_fake_detail_trending_pixiv_1.jpg",
            "https://cdn.leonardo.ai/users/f4e04d2e-3323-4ebb-bad7-87e345abd06d/generations/a47929f3-c971-4e93-bcc1-ed11cf8cd8ef/Leonardo_Diffusion_Turn_into_Beautiful_King_and_Queen_Right_si_0.jpg",
        ];

        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'price' => $this->faker->randomNumber(2),
            'quantity' => $this->faker->randomNumber(1),
            'image' => $images[random_int(0, 11)]
        ];
    }
}
