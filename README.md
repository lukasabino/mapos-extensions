# MapOS Extensions

Este repositório centraliza a listagem de extensões (addons, módulos, integrações) para o [MapOS](https://github.com/RamonSilva20/mapos).

## Sobre

O arquivo `extensions.json` contém o catálogo de extensões disponíveis, seguindo um padrão estruturado para facilitar a integração e consulta.

## Padrão do extensions.json

Cada extensão deve conter os seguintes campos:

```json
{
  "id": "identificador-unico",
  "name": "Nome da Extensão",
  "description": "Descrição breve da extensão",
  "version": "1.0.0",
  "mapos_minimum_version": "4.52.0",
  "author": "Nome do Autor",
  "website": "https://site-da-extensao.com",
  "icon": "URL do ícone SVG",
  "download": "URL para download ou contato",
  "category": "Categoria (ex: payment-gateway, modules, etc)",
  "tags": ["tag1", "tag2"],
  "type": ["free" ou "paid"],
  "readme": "Documentação resumida em Markdown"
}
```

## Como sugerir uma nova extensão

1. Clique em **Issues** > **Nova Issue** > **Solicitação de Nova Extensão**.
2. Preencha todos os campos obrigatórios conforme o template.
3. Aguarde a análise e inclusão no catálogo.

## Contribuindo

- Verifique se a extensão já não está listada.
- Siga o padrão do arquivo `extensions.json`.
- Utilize o template de issue para solicitações.

## Exemplo de extensão

Veja exemplos reais no próprio arquivo [`extensions.json`](./extensions.json).

## Licença

Este repositório é aberto para consulta e colaboração. Cada extensão pode ter sua própria licença.
