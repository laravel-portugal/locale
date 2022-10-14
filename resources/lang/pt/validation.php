<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Traduções de validação
    |--------------------------------------------------------------------------
    |
    | As linhas seguintes contêm as mensagens de erro utilizadas pela validação
    | do Laravel. Pode ajustar qualquer mensagem de acordo com os requisitos
    | da sua aplicação.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceite.',
    'active_url' => 'O campo :attribute não é um URL válido.',
    'after' => 'O campo :attribute deve ser uma data depois :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O campo :attribute só pode conter letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num' => 'O campo :attribute só pode conter letras e números.',
    'array' => 'O campo :attribute deve ser uma matriz.',
    'before' => 'O campo :attribute deve ser uma data anterior :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve ser entre :min e :max.',
        'file' => 'O campo :attribute deve ser entre :min e :max kilobytes.',
        'string' => 'O campo :attribute deve ser entre :min e :max caracteres.',
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute de confirmação não é valido.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute deve ser igual à data :date.',
    'date_format' => 'O campo :attribute não corresponde ao formato :format.',
    'different' => 'Os campos :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute campo tem um valor repetido.',
    'email' => 'O campo :attribute deve ser um endereço de email válido.',
    'ends_with' => 'O campo :attribute deve terminar com um dos seguintes valores: :values.',
    'exists' => 'O campo :attribute selecionado é inválido.',
    'file' => 'O campo :attribute deve ser um ficheiro.',
    'filled' => 'O campo :attribute o campo deve ter um valor.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O campo :attribute deve ser maior que :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior que :value characters.',
        'array' => 'O campo :attribute deve conter mais que :value items.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file' => 'O campo :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior ou igual a :value characters.',
        'array' => 'O campo :attribute deve conter :value items ou mais.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O campo :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve ser um número inteiro.',
    'ip' => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O campo :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file' => 'O campo :attribute deve ser menor que :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor que :value characters.',
        'array' => 'O campo :attribute não deve conter menos que :value items.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'file' => 'O campo :attribute deve ser menor ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor ou igual a :value characters.',
        'array' => 'O campo :attribute não deve conter mais que :value items.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não pode ser superior a :max.',
        'file' => 'O campo :attribute não pode ser superior a :max kilobytes.',
        'string' => 'O campo :attribute não pode ser superior a :max caracteres.',
        'array' => 'O campo :attribute não pode ter mais do que :max itens.',
    ],
    'mimes' => 'O campo :attribute deve ser um ficheiro de tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um ficheiro de tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ser pelo menos :min.',
        'file' => 'O campo :attribute deve ter pelo menos :min kilobytes.',
        'string' => 'O campo :attribute deve ter pelo menos :min caracteres.',
        'array' => 'O campo :attribute deve ter pelo menos :min itens.',
    ],
    'multiple_of' => 'O campo :attribute deve ser um multiplo de :value.',
    'not_in' => 'O campo :attribute selecionado é inválido.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'password' => 'A password está incorrecta.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O campo :attribute tem um formato inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório exceto quando :other seja :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando o :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido se o :other não é :values.',
    'same' => 'Os campos :attribute e :other devem corresponder.',
    'size' => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file' => 'O campo :attribute deve ser :size kilobytes.',
        'string' => 'O campo :attribute deve ser :size caracteres.',
        'array' => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O campo :attribute deve iniciar com um dos seguintes valores: :values.',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ser uma zona válida.',
    'unique' => 'O campo :attribute já está sendo utilizado.',
    'uploaded' => 'O campo :attribute falha no upload.',
    'url' => 'O campo :attribute tem um formato inválido.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Traduções de validação alternativas
    |--------------------------------------------------------------------------
    |
    | Aqui pode especificar mensagens de validação para alguns atributos
    | utilizando a convenção "attribute.rule". Tornando-se fácil a
    | validação de alguns campos numa regra particular.
    |
    */

    'custom' => [
        'attribute.name' => [
            'rule-name' => 'mensagem-alternativa',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Nomes de atributos alternativos
    |--------------------------------------------------------------------------
    |
    | Aqui poderá ser definido quais os :atributos de poderão ser alterados
    | na mensagem de forma a facilitar a comunição do erro ao utilizador.
    | Um exemplo válido será "E-mail" invés de "email".
    |
    */

    'attributes' => [],

];
