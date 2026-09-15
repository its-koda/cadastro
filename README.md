# 🚀 Desafio 1: Verificador de Maioridade (`5a_desafio1`) 🆔

Projeto desenvolvido em PHP como parte do **Desafio 1**, praticando manipulação de formulários, validação de regras de negócio, persistência de dados em arquivos de texto e exibição de dados com arrays/tabelas.

---

## 📌 Descrição do Desafio

O objetivo deste projeto é construir uma página única em PHP que execute as seguintes tarefas:

1. **🖥️ Formulário HTML:** Exibe os campos para preenchimento do **Nome** e **Ano de Nascimento**.
2. **⚙️ Cálculo de Idade:** Ao submeter o formulário (`POST`), o script PHP calcula a idade do usuário subtraindo o ano de nascimento do ano atual.
3. **✅ Validação de Maioridade (18+):** 
   - Exibe a mensagem: `"Acesso permitido, [Nome]!"`.
   - Salva o **Nome** e a **Idade** calculada no arquivo de texto `log_acessos.txt`.
4. **🚫 Menor de Idade (<18):** 
   - Exibe a mensagem: `"Acesso negado, [Nome]!"`.

---

## 📚 Conceitos Aplicados (Baseados nas Aulas)

O projeto consolida os ensinamentos práticos passados pelo instrutor em sala de aula:

* **Manipulação de Arquivos (`5_cadastro.php`):**
  - Aplicação da técnica ensinada em aula para **salvar informações em bloco de notas (`.txt`)** usando funções nativas do PHP (`fopen` no modo `'a'`, `fwrite` e `fclose`).
* **Arrays e Exibição em Tabelas (`7_arrays.php`):**
  - Utilização da estrutura de **arrays** e laços de repetição (`foreach`) conforme ensinado pelo instrutor para estruturar, organizar e renderizar dados em formato de **tabela HTML**.
* **Método `POST`:** Processamento de dados enviados via formulário HTML de forma segura na mesma página.

---

## 📂 Estrutura de Arquivos

```text
cadastro/
├── 5_cadastro.php      # Aula sobre salvamento de dados em bloco de notas (.txt)
├── 5a_desafio1.md      # Descrição do enunciado do desafio
├── 5a_desafio1.php     # Resolução principal do Desafio 1 (Formulário + Validação)
├── 7_arrays.php        # Aula sobre arrays e geração de tabelas
├── log_acessos.txt     # Arquivo gerado para armazenar os logs dos maiores de idade
└── README.md           # Documentação do projeto