<?php

$extension = json_decode(file_get_contents('extensions.json'), true);
$id = $_GET['id'];
$extension = $extension['data'][$id];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $extension['name']; ?> • Map-Os Extensions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .header-section {
            background: white;
            border-bottom: 1px solid #e1e5e9;
            padding: 20px 0;
        }

        .back-btn {
            background: #007bff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            color: white;
            margin-right: 15px;
            transition: all 0.2s;
        }

        .back-btn:hover {
            background: #0056b3;
            color: white;
        }

        .extension-title {
            font-size: 2rem;
            font-weight: 700;
            color: #212529;
            margin: 0;
        }

        .extension-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            margin: 5px 0 0 0;
        }

        .nav-tabs {
            border-bottom: none;
            margin-top: 20px;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #6c757d;
            font-weight: 500;
            padding: 10px 20px;
            margin-right: 10px;
        }

        .nav-tabs .nav-link.active {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            background: none;
        }

        .main-content {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 30px;
        }

        .content-section {
            margin-bottom: 30px;
        }

        .content-section h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #212529;
            margin-bottom: 15px;
        }

        .content-section h3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #495057;
            margin: 20px 0 10px 0;
        }

        .content-section p {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .content-section ul {
            color: #6c757d;
            line-height: 1.6;
        }

        .content-section a {
            color: #007bff;
            text-decoration: none;
        }

        .content-section a:hover {
            text-decoration: underline;
        }

        .sidebar {
            margin-top: 20px;
        }

        .sidebar-card {
            background: white;
            border: 1px solid #e1e5e9;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .sidebar-card h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #212529;
            margin-bottom: 15px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 0.9rem;
        }

        .detail-item i {
            width: 20px;
            margin-right: 10px;
            color: #6c757d;
        }

        .detail-item a {
            color: #007bff;
            text-decoration: none;
        }

        .detail-item a:hover {
            text-decoration: underline;
        }

        .download-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-left: auto;
        }

        .download-btn:hover {
            background: #0056b3;
            color: white;
            text-decoration: none;
        }

        .download-btn i {
            margin-right: 5px;
        }

        .release-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #f1f3f4;
        }

        .release-item:last-child {
            border-bottom: none;
        }

        .release-version {
            font-weight: 500;
            color: #212529;
        }

        .release-date {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .view-more {
            color: #007bff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .view-more:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .main-content {
                margin: 10px 0;
                padding: 20px;
            }

            .extension-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="header-section">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="index.php" class="back-btn center">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-lightbulb text-warning mr-2"></i>
                        <h1 class="extension-title"><?php echo $extension['name']; ?> • v<?php echo $extension['version']; ?></h1>
                    </div>
                    <p class="extension-subtitle"><?php echo $extension['description']; ?></p>
                </div>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#overview" data-toggle="tab">Visão Geral</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-content">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="overview">
                            <?php echo $extension['description']; ?>
                        </div>

                        <div class="tab-pane fade" id="releases">
                            <div class="content-section">
                                <h2>Histórico de Versões</h2>
                                <div class="release-item">
                                    <span class="release-version">v<?php echo $extension['version']; ?></span>
                                    <span class="release-date">há mais de 1 ano</span>
                                </div>
                                <div class="release-item">
                                    <span class="release-version">v1.0.0-beta</span>
                                    <span class="release-date">há mais de 2 anos</span>
                                </div>
                                <div class="release-item">
                                    <span class="release-version">v0.9.0</span>
                                    <span class="release-date">há mais de 2 anos</span>
                                </div>
                                <a href="#" class="view-more">Ver mais →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-card">
                        <h3>Detalhes da Extensão</h3>
                        <div class="detail-item">
                            <i class="fas fa-user"></i>
                            <span><strong>Publicador:</strong> <a href="<?php echo $extension['website']; ?>" target="_blank"><?php echo $extension['author']; ?></a></span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Compatível com:</strong> Map-Os v<?php echo $extension['mapos_minimum_version']; ?> e posterior</span>
                        </div>
                        <div class="detail-item">
                            <i class="fab fa-github"></i>
                            <span><strong>Código fonte:</strong> <a href="https://github.com/lukasabino/mapos-extensions" target="_blank">lukasabino/mapos-extensions</a></span>
                        </div>
                        <a href="<?php echo $extension['download']; ?>" class="download-btn" target="_blank">
                            <i class="fas fa-download"></i>
                            v<?php echo $extension['version']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<?php

?>