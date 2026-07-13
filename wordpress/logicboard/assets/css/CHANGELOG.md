# CHANGELOG

Todas as alterações importantes deste projeto serão documentadas neste arquivo.

O formato segue o padrão **Keep a Changelog** adaptado para o desenvolvimento do tema LogicBoard.

## RC2.6 - Footer totalmente administrável

### Added
- Seção Footer administrável.
- Helper `footer.php`.

### Changed
- Footer atualizado para utilizar dados dinâmicos.

### Improved
- Reutilização dos dados da seção Empresa.
- Endereço exibido através do helper centralizado.

---

## RC2.5 - CTA totalmente administrável

### Added
- Seção CTA administrável.
- Helper `cta.php`.
- Configuração dos dois botões pelo painel.

### Changed
- Template `template-parts/cta.php` atualizado para utilizar conteúdo dinâmico.

### Improved
- Link do botão principal utiliza o WhatsApp como fallback.
- Botões totalmente configuráveis pelo painel.

---

## RC2.4 - FAQ totalmente administrável

### Added
- Seção FAQ administrável.
- Helper `faq.php`.
- Cadastro de até seis perguntas e respostas.

### Changed
- Template `template-parts/faq.php` atualizado para utilizar conteúdo dinâmico.

### Improved
- Perguntas sem conteúdo não são exibidas.
- Mantida compatibilidade com o accordion existente.

---

## RC2.2 - Diferenciais totalmente administráveis

### Added
- Seção Diferenciais administrável.
- Helper `differentials.php`.
- Quatro cards configuráveis pelo painel.

### Changed
- Template `template-parts/differentials.php` atualizado para utilizar conteúdo dinâmico.

### Improved
- Padronização da arquitetura entre Hero, Serviços, Processo e Diferenciais.---

---

## RC2.1 - Processo totalmente administrável

### Added
- Criada a seção Processo no painel LogicBoard.
- Adicionados campos para badge, título e subtítulo.
- Implementados os quatro passos do processo.
- Criado o helper `process.php`.

### Changed
- O template `template-parts/process.php` passou a utilizar conteúdo dinâmico.

### Improved
- Reutilizada a arquitetura modular criada para Hero e Serviços.

---

## RC2.0 - Biblioteca de Mídia

### Added
- Suporte ao tipo de campo `media`.
- Integração com a Biblioteca de Mídia do WordPress.
- Preview automático da imagem selecionada.

### Changed
- Hero atualizada para utilizar o seletor de mídia.

### Improved
- Estrutura preparada para reutilização em outras seções.

---

## RC1.9 - Serviços totalmente administráveis

### Added
- Seção Serviços integrada ao painel LogicBoard.
- Cadastro dinâmico dos seis serviços.
- Helper `services.php`.

### Changed
- Template `services.php` atualizado para consumir dados do painel.

### Improved
- Modularização da arquitetura dos helpers.