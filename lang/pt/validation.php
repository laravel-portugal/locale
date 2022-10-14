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
    'accepted_if' => 'O campo :attribute deve ser aceite quando :other é :value.',
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
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
        'file' => 'O campo :attribute deve ser entre :min e :max kilobytes.',
        'numeric' => 'O campo :attribute deve ser entre :min e :max.',
        'string' => 'O campo :attribute deve ser entre :min e :max caracteres.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute de confirmação não é valido.',
    'current_password' => 'A password está incorrecta.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute deve ser igual à data :date.',
    'date_format' => 'O campo :attribute não corresponde ao formato :format.',
    'declined' => 'O campo :attribute não deve ser aceite.',
    'declined_if' => 'O campo :attribute não deve ser aceite quando :other é :value.',
    'different' => 'Os campos :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute campo tem um valor repetido.',
    'doesnt_end_with' => 'O campo :attribute não termina com uma das seguintes opções: :values.',
    'doesnt_start_with' => 'O campo :attribute não começa com uma das seguintes opções: :values.',
    'email' => 'O campo :attribute deve ser um endereço de email válido.',
    'ends_with' => 'O campo :attribute deve terminar com um dos seguintes valores: :values.',
    'enum' => 'O campo :attribute é inválido.',
    'exists' => 'O campo :attribute selecionado é inválido.',
    'file' => 'O campo :attribute deve ser um ficheiro.',
    'filled' => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'array' => 'O campo :attribute deve conter mais que :value items.',
        'file' => 'O campo :attribute deve ser maior que :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'string' => 'O campo :attribute deve ser maior que :value characters.',
    ],
    'gte' => [
        'array' => 'O campo :attribute deve conter :value items ou mais.',
        'file' => 'O campo :attribute deve ser maior ou igual a :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'string' => 'O campo :attribute deve ser maior ou igual a :value characters.',
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
        'array' => 'O campo :attribute não deve conter menos que :value items.',
        'file' => 'O campo :attribute deve ser menor que :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'string' => 'O campo :attribute deve ser menor que :value characters.',
    ],
    'lte' => [
        'array' => 'O campo :attribute não deve conter mais que :value items.',
        'file' => 'O campo :attribute deve ser menor ou igual a :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'string' => 'O campo :attribute deve ser menor ou igual a :value characters.',
    ],
    'mac_address' => 'O campo :attribute deve ser um MAC address válido.',
    'max' => [
        'array' => 'O campo :attribute não pode ter mais do que :max itens.',
        'file' => 'O campo :attribute não pode ser superior a :max kilobytes.',
        'numeric' => 'O campo :attribute não pode ser superior a :max.',
        'string' => 'O campo :attribute não pode ser superior a :max caracteres.',
    ],
    'max_digits' => 'O campo :attribute deve ter mais de :max digitos.',
    'mimes' => 'O campo :attribute deve ser um ficheiro de tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um ficheiro de tipo: :values.',
    'min' => [
        'array' => 'O campo :attribute deve ter pelo menos :min itens.',
        'file' => 'O campo :attribute deve ter pelo menos :min kilobytes.',
        'numeric' => 'O campo :attribute deve ser pelo menos :min.',
        'string' => 'O campo :attribute deve ter pelo menos :min caracteres.',
    ],
    'min_digits' => 'O campo :attribute deve ter pelo menos :min digitos.',
    'multiple_of' => 'O campo :attribute deve ser um multiplo de :value.',
    'not_in' => 'O campo :attribute selecionado é inválido.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'password' => [
        'letters' => 'O campo :attribute deve conter pelo menos uma letra.',
        'mixed' => 'O campo :attribute deve conter pelo menos uma letra maiuscula e uma letra miniscula.',
        'numbers' => 'O campo :attribute deve conter pelo menos um número.',
        'symbols' => 'O campo :attribute deve conter pelo menus um caracter especial.',
        'uncompromised' => 'O campo :attribute apareceu em um vazamento de dados. Por favor escolha outra :attribute.',
    ],
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando o :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido se o :other não é :values.',
    'prohibits' => 'O campo :attribute proibe :other de estar presente.',
    'regex' => 'O campo :attribute tem um formato inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_array_keys' => 'O campo :attribute deve conter entradas para: :values.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_if_accepted' => 'O campo :attribute é obrigatório quando :other estiver aceite.',
    'required_unless' => 'O campo :attribute é obrigatório exceto quando :other seja :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same' => 'Os campos :attribute e :other devem corresponder.',
    'size' => [
        'array' => 'O campo :attribute deve conter :size itens.',
        'file' => 'O campo :attribute deve ser :size kilobytes.',
        'numeric' => 'O campo :attribute deve ser :size.',
        'string' => 'O campo :attribute deve ser :size caracteres.',
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
