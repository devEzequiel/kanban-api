<?php

namespace App\Http\Controllers\Api\Stage;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterStageRequest;

class StageController extends Controller
{
    public function index(FilterStageRequest $request)
    {
        $filters = $request->validated();

        $stages = collect([
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
                            "id" => 3,
                            "name" => "Desafio 3"
                        ],
                        "score" => 4.0,
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
                        "due_date" => "14/02",
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
                                "due_date" => "14/09",
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
                                "due_date" => "12/01",
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
                            "id" => 2,
                            "name" => "Startup B"
                        ],
                        "challenge" => [
                            "id" => 1,
                            "name" => "Desafio A"
                        ],
                        "score" => 5.0,
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
                        "due_date" => "28/12",
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
                                "due_date" => "23/01",
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
                                "due_date" => "18/01",
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
                            "id" => 3,
                            "name" => "Startup C"
                        ],
                        "challenge" => [
                            "id" => 3,
                            "name" => "Desafio C"
                        ],
                        "score" => 2.0,
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
                        "due_date" => "29/04",
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
                                "due_date" => "20/12",
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
                                "due_date" => "02/04",
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
                            "name" => "Startup A"
                        ],
                        "challenge" => [
                            "id" => 2,
                            "name" => "Desafio B"
                        ],
                        "score" => 4.0,
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
                        "due_date" => "01/01",
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
                                "due_date" => "31/01",
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
                                "due_date" => "11/11",
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
                            "id" => 2,
                            "name" => "Startup B"
                        ],
                        "challenge" => [
                            "id" => 1,
                            "name" => "Desafio A"
                        ],
                        "score" => 3.0,
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
                        "due_date" => "30/02",
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
                                "due_date" => "15/12",
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
                                "due_date" => "22/03",
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
        ]);

        return $stages;
    }
}
