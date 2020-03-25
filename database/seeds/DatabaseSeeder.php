<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$volleyballEquipment = array(
			array(
				'category' => 'kamuoliai',
				'category_url' => 'kamuoliai',
				'name' => 'Molten XL',
				'description' => 'Paplūdimio kamuolys',
				'price' => 69.99,
				'quantity' => 25,
			),
			array(
				'category' => 'kamuoliai',
				'category_url' => 'kamuoliai',
				'name' => 'Mikasa S500Z',
				'description' => 'Paplūdimio kamuolys',
				'price' => 59.99,
				'quantity' => 8,
			),
			array(
				'category' => 'tinklai',
				'category_url' => 'tinklai',
				'name' => 'Salės tinklas',
				'description' => 'Salės tinklo komplektas',
				'price' => 99.99,
				'quantity' => 8,
			),
			array(
				'category' => 'linijos',
				'category_url' => 'linijos',
				'name' => 'LINE XL',
				'description' => 'Paplūdimio linijos 50mm',
				'price' => 109.99,
				'quantity' => 44,
			),
			array(
				'category' => 'kamuoliai',
				'category_url' => 'kamuoliai',
				'name' => 'Mikasa V200W',
				'description' => 'Salės tinklinio kamuolys',
				'price' => 49.99,
				'quantity' => 15,
			),
			array(
				'category' => 'linijos',
				'category_url' => 'linijos',
				'name' => 'LINE MD',
				'description' => 'Paplūdimio linijos 45mm',
				'price' => 89.99,
				'quantity' => 14,
			),
			array(
				'category' => 'kamuoliai',
				'category_url' => 'kamuoliai',
				'name' => 'Molten QR',
				'description' => 'Paplūdimio kamuolys',
				'price' => 89.99,
				'quantity' => 45,
			),
			array(
				'category' => 'tinklai',
				'category_url' => 'tinklai',
				'name' => 'PROFI 4 EXTRA',
				'description' => 'Paplūdimio tinklo komplektas',
				'price' => 129.99,
				'quantity' => 21,
			),
			array(
				'category' => 'linijos',
				'category_url' => 'linijos',
				'name' => 'Molten XS',
				'description' => 'Paplūdimio linijos 40mm',
				'price' => 69.99,
				'quantity' => 9,
			),
			array(
				'category' => 'kamuoliai',
				'category_url' => 'kamuoliai',
				'name' => 'Molten XA',
				'description' => 'Paplūdimio kamuolys',
				'price' => 99.99,
				'quantity' => 29,
			),
		);

		foreach ( $volleyballEquipment as $singleProduct ) {
			DB::table('equipment')->insert([
				'category' => $singleProduct['category'],
				'category_url' => $singleProduct['category_url'],
				'name' => $singleProduct['name'],
				'description' => $singleProduct['description'],
				'price' => $singleProduct['price'],
				'quantity' => $singleProduct['quantity'],
			]);
		}

		DB::table('categories')->insert([
			'title' => 'linijos',
			'category_url' => 'linijos',
		]);

		DB::table('categories')->insert([
			'title' => 'kamuoliai',
			'category_url' => 'kamuoliai',
		]);

		DB::table('categories')->insert([
			'title' => 'tinklai',
			'category_url' => 'tinklai',
		]);

	}
}
