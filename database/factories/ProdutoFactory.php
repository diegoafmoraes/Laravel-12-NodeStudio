<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends Factory<Produto>
 */
class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = fake()->unique()->words(3, true); // Gera um nome de produto com 3 palavras
        
        return [
            'hid' => Str::random(32), // Adicionado para preencher o seu hash público!
            'nome' => ucfirst($nome),
            'descricao' => fake()->paragraph(), // Corrigido de fake()->word()->paragraph()
            'preco' => fake()->randomFloat(2, 10, 1000), // Gera um preço decimal entre 10 e 1000
            'slug' => Str::slug($nome),
            'imagem' => fake()->imageUrl(400, 400), // Corrigido de fake()->word()->imageUrl()
            'id_user' => User::inRandomOrder()->first()?->id ?? User::factory(), // Forma segura caso a tabela esteja vazia
            'id_categoria' => Categoria::inRandomOrder()->first()?->id ?? Categoria::factory(),
        ];
    }
}