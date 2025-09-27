<?php

$extensions = json_decode(file_get_contents('extensions.json'), true);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map-Os Extensions - Diretório de Extensões</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .header-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
            margin-bottom: 40px;
        }

        .header-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .header-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .stats-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #6c757d;
            font-size: 1rem;
            font-weight: 500;
        }

        .extension-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            overflow: hidden;
            border: none;
        }

        .extension-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .extension-header {
            padding: 25px 25px 20px 25px;
            border-bottom: 1px solid #f1f3f4;
        }

        .extension-icon {
            width: 50px;
            height: 50px;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .extension-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #212529;
            margin-bottom: 5px;
        }

        .extension-meta {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .extension-description {
            color: #495057;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .extension-tags {
            margin-bottom: 20px;
        }

        .tag {
            background: #e9ecef;
            color: #495057;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-right: 8px;
            margin-bottom: 8px;
            display: inline-block;
        }

        .tag.paid {
            background: #d4edda;
            color: #155724;
        }

        .tag.free {
            background: #cce5ff;
            color: #004085;
        }

        .extension-actions {
            padding: 20px 25px;
            background: #f8f9fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-details {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-details:hover {
            background: #0056b3;
            color: white;
            text-decoration: none;
        }

        .btn-download {
            background: #28a745;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-download:hover {
            background: #218838;
            color: white;
            text-decoration: none;
        }

        .search-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .search-input {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 1rem;
            transition: all 0.2s;
        }

        .search-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .filter-buttons {
            margin-top: 20px;
        }

        .filter-btn {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            color: #495057;
            padding: 8px 16px;
            border-radius: 20px;
            margin-right: 10px;
            margin-bottom: 10px;
            transition: all 0.2s;
        }

        .filter-btn.active {
            background: #007bff;
            color: white;
            border-color: #007bff;
        }

        .filter-btn:hover {
            background: #007bff;
            color: white;
            border-color: #007bff;
        }

        .footer {
            background: #212529;
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }

        .footer a {
            color: #6c757d;
            text-decoration: none;
        }

        .footer a:hover {
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .header-title {
                font-size: 2rem;
            }

            .extension-card {
                margin-bottom: 20px;
            }

            .extension-actions {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="header-section">
        <div class="container">
            <div class="text-center">
                <h1 class="header-title">
                    <i class="fas fa-puzzle-piece mr-3"></i>
                    Extensões Map-Os
                </h1>
                <p class="header-subtitle">
                    Bem-vindo ao Diretório de Extensões Map-Os
                </p>
                <a href="https://github.com/lukasabino/mapos-extensions" class="btn btn-light btn-lg" target="_blank">
                    <i class="fab fa-github mr-2"></i>
                    Contribuir no GitHub
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="stats-section">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo count($extensions['data']); ?></div>
                        <div class="stat-label">Extensões Disponíveis</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo count(array_filter($extensions['data'], function ($ext) {
                                                        return in_array('free', $ext['type']);
                                                    })); ?></div>
                        <div class="stat-label">Gratuitas</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo count(array_filter($extensions['data'], function ($ext) {
                                                        return in_array('paid', $ext['type']);
                                                    })); ?></div>
                        <div class="stat-label">Pagas</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo count(array_unique(array_column($extensions['data'], 'author'))); ?></div>
                        <div class="stat-label">Desenvolvedores</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-section">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control search-input" placeholder="Pesquisar extensões..." id="searchInput">
                </div>
            </div>
            <div class="filter-buttons">
                <button class="btn filter-btn active" data-filter="all">Todas</button>
                <button class="btn filter-btn" data-filter="free">Gratuitas</button>
                <button class="btn filter-btn" data-filter="paid">Pagas</button>
            </div>
        </div>

        <div class="row" id="extensionsContainer">
            <?php foreach ($extensions['data'] as $index => $extension) { ?>
                <div class="col-lg-4 col-md-6 extension-item"
                    data-name="<?php echo strtolower($extension['name']); ?>"
                    data-category="<?php echo $extension['category']; ?>"
                    data-type="<?php echo implode(' ', $extension['type']); ?>">
                    <div class="extension-card">
                        <div class="extension-header">
                            <div class="extension-icon">
                                <img src="<?php echo $extension['icon']; ?>" alt="<?php echo $extension['name']; ?>" style="width: 30px; height: 30px;">
                            </div>
                            <h3 class="extension-title"><?php echo $extension['name']; ?></h3>
                            <div class="extension-meta">
                                <i class="fas fa-user mr-1"></i>
                                <?php echo $extension['author']; ?> •
                                <i class="fas fa-tag mr-1"></i>
                                v<?php echo $extension['version']; ?>
                            </div>
                            <p class="extension-description"><?php echo $extension['description']; ?></p>
                            <div class="extension-tags">
                                <?php foreach ($extension['tags'] as $tag) { ?>
                                    <span class="tag"><?php echo $tag; ?></span>
                                <?php } ?>
                                <?php foreach ($extension['type'] as $type) { ?>
                                    <span class="tag <?php echo $type; ?>"><?php echo $type === 'free' ? 'Gratuita' : 'Paga'; ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="extension-actions">
                            <a href="detail.php?id=<?php echo $index; ?>" class="btn-details">
                                <i class="fas fa-info-circle mr-1"></i>
                                Detalhes
                            </a>
                            <a href="<?php echo $extension['download']; ?>" class="btn-download" target="_blank">
                                <i class="fas fa-download mr-1"></i>
                                <?php
                                    if (in_array('free', $extension["type"])) {
                                        echo "Download";
                                    } elseif (in_array('paid', $extension["type"])) {
                                        echo "Comprar";
                                    } else {
                                        echo "Acessar";
                                    }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Map-Os Extensions</h5>
                    <p>Diretório oficial de extensões para o Map-Os</p>
                </div>
                <div class="col-md-6 text-md-right">
                    Hospedado na <a href="https://sysgo.com.br" target="_blank">SysGO</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            // Filtro de pesquisa
            $('#searchInput').on('keyup', function() {
                var searchTerm = $(this).val().toLowerCase();
                filterExtensions();
            });

            // Filtro de categoria
            $('#categoryFilter').on('change', function() {
                filterExtensions();
            });

            // Filtro de tipo
            $('.filter-btn').on('click', function() {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                filterExtensions();
            });

            function filterExtensions() {
                var searchTerm = $('#searchInput').val().toLowerCase();
                var categoryFilter = $('#categoryFilter').val();
                var typeFilter = $('.filter-btn.active').data('filter');

                $('.extension-item').each(function() {
                    var $item = $(this);
                    var name = $item.data('name');
                    var category = $item.data('category');
                    var type = $item.data('type');

                    var matchesSearch = name.includes(searchTerm);
                    var matchesCategory = categoryFilter === '' || category === categoryFilter;
                    var matchesType = typeFilter === 'all' || type.includes(typeFilter);

                    if (matchesSearch && matchesCategory && matchesType) {
                        $item.show();
                    } else {
                        $item.hide();
                    }
                });
            }
        });
    </script>
</body>

</html>