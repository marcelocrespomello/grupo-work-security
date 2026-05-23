# Grupo Work Security

Site institucional de uma página (landing page) para o Grupo Work Security.

## 🚀 Sobre o Projeto
O **Grupo Work Security** é uma empresa com 10 anos de experiência no mercado, especializada em soluções integradas de segurança e serviços terceirizados. O site apresenta os principais pilares da empresa: Portaria, Guarda Patrimonial, Monitoramento, Limpeza e Jardinagem.

## 🛠️ Tecnologias Utilizadas
- **HTML5 / CSS3**
- **JavaScript (ES6)**
- **[Materialize CSS](http://materializecss.com/)** - Framework front-end baseado em Material Design.
- **jQuery 2.1.1** - Manipulação de DOM e interatividade.
- **Font Awesome** - Conjunto de ícones vetoriais.
- **PHP** - Utilizado para o processamento do formulário de contato (`contact.php`).

## 📁 Estrutura de Arquivos
Os arquivos do site estão localizados no diretório `www/`:

- `index.html`: Estrutura principal da página única.
- `css/`: Folhas de estilo customizadas (`style.css`).
- `js/`: Scripts de inicialização (`init.js`) e bibliotecas.
- `img/`: Ativos de imagem, incluindo backgrounds de parallax e fotos de projetos.
- `min/`: Pacotes minificados de CSS e JS para melhor performance em produção.
- `contact.php`: Script para envio de e-mails via formulário de contato.

## 💻 Como Executar o Projeto

### Servidor PHP (Recomendado)
Para que o formulário de contato funcione corretamente, você deve servir o projeto usando PHP:

```bash
# Execute este comando na raiz do projeto
php -S localhost:8000 -t www
```
Acesse: `http://localhost:8000`

### Servidor Estático (Somente Front-end)
Se desejar apenas visualizar o layout sem a funcionalidade de e-mail:

```bash
# Usando Python
python3 -m http.server 8000 --directory www
```

## ⚠️ Notas de Desenvolvimento
O arquivo `index.html` está configurado para carregar os arquivos CSS e JS da pasta `min/` (versões combinadas e minificadas). 

Se você fizer alterações em `www/css/style.css` ou `www/js/init.js`, você precisará:
1. Atualizar os arquivos minificados em `www/min/`.
2. **OU** Alterar as tags `<link>` e `<script>` no `index.html` para apontar diretamente para os arquivos de origem durante o desenvolvimento.

---
© 2024 Grupo Work Security. Todos os direitos reservados.
