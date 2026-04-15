package conteudo;
class Pessoa {

    // 1. Atributos
    String nome;
    String cpf;
    int idade;

    // 2. Construtor
    Pessoa(String nome, String cpf, int idade) {
        this.nome = nome;
        this.cpf = cpf;
        this.idade = idade;
    }

    // 3. Getters
    public String getNome() {
        return nome;
    }

    public String getCpf() {
        return cpf;
    }

    public int getIdade() {
        return idade;
    }

    // 4. Setters
    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public void setIdade(int idade) {
        if (idade >= 12 && idade <= 65) {
            this.idade = idade;
        } else {
            System.out.println("Idade Inválida!");
        }
    }

    // 5. Outros métodos
    void exibirInfo() {
        System.out.println("Nome: " + this.nome);
        System.out.println("CPF: " + this.cpf);
        System.out.println("Idade: " + this.idade);
        System.out.println();
    }
}