<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomeproduto', 'valor', 'categoria_id'];
    protected $returntype = 'object';

    protected $validationRules = [
        'nomeproduto' => 'required|min_length[3]|alpha_numeric_space|is_unique[produto.nomeproduto]',
        'valor' => 'required|numeric'
    ];
    protected $validationMessages = [
        'nomeproduto' => [
            'required' => 'O campo nomeproduto é obrigatório.',
            'min_length' => 'O campo nomeproduto tem que ter mais de 3 caracteres.',
            'is_unique' => 'Já existe um produto com o nome informado.'
        ],
        'valor' => [
            'required' => 'O campo valor é obrigatório.',
            'numeric' => 'O campo valor deve conter apenas números.'
        ]

    ];
}