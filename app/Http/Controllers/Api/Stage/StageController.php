<?php

namespace App\Http\Controllers\Api\Stage;

use App\Http\Controllers\Controller;

class StageController extends Controller
{
    public function index()
    {
        $stages = [
            [
                'id' => 1,
                "name" => "Primeira Etapa",
                "applications" => [
                    [
                        "id" => 1,
                        "startup" => [
                            "id" => 1,
                            "name" => "Startup A"
                        ],
                        "challenge" => [
                            "id" => 1,
                            "name" => "Desafio B"
                        ],
                        "score" => 3.6,
                        "assignee" => [
                            "id" => 1,
                            "email" => "usuario1@empresa.com",
                            "name" => "Usuário 1"
                        ],
                        "comments" => [
                            [
                                "id" => 1,
                                "author" => [
                                    "id" => "1",
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1"
                                ]
                            ]
                        ],
                        "due_date" => "new Date(2023, 0, 1)",
                        "attachments" => [
                            [
                                "id" => "1",
                                "filename" => "exemplo.jpg",
                                "full_path" => "pasta/arquivo/3dfb8a9c83.jpg",
                            ]
                        ],
                        "tasks" => [
                            [
                                "id" => 1,
                                "name" => "Tarefa 1",
                                "due_date" => "new Date(2023, 2, 1)",
                                "assignee" => [
                                    "id" => 2,
                                    "email" => "usuario2@empresa.com",
                                    "name" => "Usuário 2",
                                ],
                                "status" => "todo",
                                "section" => [
                                    "id" => 1,
                                    "name" => "Primeira Etapa"
                                ],
                            ],
                            [
                                "id" => 2,
                                "name" => "Tarefa 2",
                                "due_date" => "new Date(2023, 2, 8)",
                                "assignee" => [
                                    "id" => 1,
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1",
                                ],
                                "status" => "doing",
                                "section" => [
                                    "id" => 2,
                                    "name" => "Segunda Etapa"
                                ],
                            ]
                        ]
                    ],
                    [
                        "id" => 2,
                        "startup" => [
                            "id" => 1,
                            "name" => "Startup B"
                        ],
                        "challenge" => [
                            "id" => 1,
                            "name" => "Desafio A"
                        ],
                        "score" => 3.6,
                        "assignee" => [
                            "id" => 1,
                            "email" => "usuario1@empresa.com",
                            "name" => "Tafarel Yan"
                        ],
                        "comments" => [
                            [
                                "id" => 1,
                                "author" => [
                                    "id" => "1",
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Ezequiel"
                                ]
                            ]
                        ],
                        "due_date" => "new Date(2023, 0, 1)",
                        "attachments" => [
                            [
                                "id" => "1",
                                "filename" => "exemplo.jpg",
                                "full_path" => "pasta/arquivo/3dfb8a9c83.jpg",
                            ]
                        ],
                        "tasks" => [
                            [
                                "id" => 1,
                                "name" => "Tarefa 1",
                                "due_date" => "new Date(2023, 2, 1)",
                                "assignee" => [
                                    "id" => 2,
                                    "email" => "usuario2@empresa.com",
                                    "name" => "Usuário 2",
                                ],
                                "status" => "todo",
                                "section" => [
                                    "id" => 1,
                                    "name" => "Primeira Etapa"
                                ],
                            ],
                            [
                                "id" => 2,
                                "name" => "Tarefa 2",
                                "due_date" => "new Date(2023, 2, 8)",
                                "assignee" => [
                                    "id" => 1,
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1",
                                ],
                                "status" => "doing",
                                "section" => [
                                    "id" => 2,
                                    "name" => "Segunda Etapa"
                                ],
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => 2,
                "name" => "Segunda Etapa",
                "applications" => [
                    [
                        "id" => 1,
                        "startup" => [
                            "id" => 1,
                            "name" => "Startup A"
                        ],
                        "challenge" => [
                            "id" => 1,
                            "name" => "Desafio B"
                        ],
                        "score" => 3.6,
                        "assignee" => [
                            "id" => 1,
                            "email" => "usuario1@empresa.com",
                            "name" => "Usuário 1"
                        ],
                        "comments" => [
                            [
                                "id" => 1,
                                "author" => [
                                    "id" => "1",
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1"
                                ]
                            ]
                        ],
                        "due_date" => "new Date(2023, 0, 1)",
                        "attachments" => [
                            [
                                "id" => "1",
                                "filename" => "exemplo.jpg",
                                "full_path" => "pasta/arquivo/3dfb8a9c83.jpg",
                            ]
                        ],
                        "tasks" => [
                            [
                                "id" => 1,
                                "name" => "Tarefa 1",
                                "due_date" => "new Date(2023, 2, 1)",
                                "assignee" => [
                                    "id" => 2,
                                    "email" => "usuario2@empresa.com",
                                    "name" => "Usuário 2",
                                ],
                                "status" => "todo",
                                "section" => [
                                    "id" => 1,
                                    "name" => "Primeira Etapa"
                                ],
                            ],
                            [
                                "id" => 2,
                                "name" => "Tarefa 2",
                                "due_date" => "new Date(2023, 2, 8)",
                                "assignee" => [
                                    "id" => 1,
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1",
                                ],
                                "status" => "doing",
                                "section" => [
                                    "id" => 2,
                                    "name" => "Segunda Etapa"
                                ],
                            ]
                        ]
                    ],
                    [
                        "id" => 2,
                        "startup" => [
                            "id" => 1,
                            "name" => "Startup B"
                        ],
                        "challenge" => [
                            "id" => 1,
                            "name" => "Desafio A"
                        ],
                        "score" => 3.6,
                        "assignee" => [
                            "id" => 1,
                            "email" => "usuario1@empresa.com",
                            "name" => "Tafarel Yan"
                        ],
                        "comments" => [
                            [
                                "id" => 1,
                                "author" => [
                                    "id" => "1",
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Ezequiel"
                                ]
                            ]
                        ],
                        "due_date" => "new Date(2023, 0, 1)",
                        "attachments" => [
                            [
                                "id" => "1",
                                "filename" => "exemplo.jpg",
                                "full_path" => "pasta/arquivo/3dfb8a9c83.jpg",
                            ]
                        ],
                        "tasks" => [
                            [
                                "id" => 1,
                                "name" => "Tarefa 1",
                                "due_date" => "new Date(2023, 2, 1)",
                                "assignee" => [
                                    "id" => 2,
                                    "email" => "usuario2@empresa.com",
                                    "name" => "Usuário 2",
                                ],
                                "status" => "todo",
                                "section" => [
                                    "id" => 1,
                                    "name" => "Primeira Etapa"
                                ],
                            ],
                            [
                                "id" => 2,
                                "name" => "Tarefa 2",
                                "due_date" => "new Date(2023, 2, 8)",
                                "assignee" => [
                                    "id" => 1,
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1",
                                ],
                                "status" => "doing",
                                "section" => [
                                    "id" => 2,
                                    "name" => "Segunda Etapa"
                                ],
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => 3,
                "name" => "Terceira Etapa",
                "applications" => [
                    [
                        "id" => 1,
                        "startup" => [
                            "id" => 1,
                            "name" => "Startup A"
                        ],
                        "challenge" => [
                            "id" => 1,
                            "name" => "Desafio B"
                        ],
                        "score" => 3.6,
                        "assignee" => [
                            "id" => 1,
                            "email" => "usuario1@empresa.com",
                            "name" => "Usuário 1"
                        ],
                        "comments" => [
                            [
                                "id" => 1,
                                "author" => [
                                    "id" => "1",
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1"
                                ]
                            ]
                        ],
                        "due_date" => "new Date(2023, 0, 1)",
                        "attachments" => [
                            [
                                "id" => "1",
                                "filename" => "exemplo.jpg",
                                "full_path" => "pasta/arquivo/3dfb8a9c83.jpg",
                            ]
                        ],
                        "tasks" => [
                            [
                                "id" => 1,
                                "name" => "Tarefa 1",
                                "due_date" => "new Date(2023, 2, 1)",
                                "assignee" => [
                                    "id" => 2,
                                    "email" => "usuario2@empresa.com",
                                    "name" => "Usuário 2",
                                ],
                                "status" => "todo",
                                "section" => [
                                    "id" => 1,
                                    "name" => "Primeira Etapa"
                                ],
                            ],
                            [
                                "id" => 2,
                                "name" => "Tarefa 2",
                                "due_date" => "new Date(2023, 2, 8)",
                                "assignee" => [
                                    "id" => 1,
                                    "email" => "usuario1@empresa.com",
                                    "name" => "Usuário 1",
                                ],
                                "status" => "doing",
                                "section" => [
                                    "id" => 2,
                                    "name" => "Segunda Etapa"
                                ],
                            ]
                        ]
                    ]
                ]
            ]
        ];
        return $stages;
    }
}
