<?php

namespace Geekbrains\Application1;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Render {
    private string $viewFolder = '/src/Views/';
    private FilesystemLoader $loader;
    private Environment $environment;


    public function __construct(){
        $this->loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . $this->viewFolder);
        $this->environment = new Environment($this->loader, [
            'cache' => $_SERVER['DOCUMENT_ROOT'].'/cache/',
        ]);
    }

    public function renderPage(string $contentTemplateName = 'page-index.tpl', array $templateVariables = []) {
        $template = $this->environment->load('main.tpl');
        $templateVariables['header_template_name'] = 'header.tpl';
        $templateVariables['content_template_name'] = $contentTemplateName;
        $templateVariables['futer_template_name'] = 'futer.tpl';
        $templateVariables['time'] = date('H:i d-m-Y');
        return $template->render($templateVariables);
    }
}