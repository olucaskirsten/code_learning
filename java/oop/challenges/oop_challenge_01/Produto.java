package exercicio1;

class Produto {
    private String nome;
    private double preco;
    private int qtd;

    public Produto(String nome, double preco, int qtd) {
        this.nome = nome;
        this.preco = preco;
        this.qtd = qtd;
    }

    public String getNome() {
        return nome;
    }

    public double getPreco() {
        return preco;
    }

    public int getQtd() {
        return qtd;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setPreco(double preco) {
        if (preco > 0) {
            this.preco = preco;
        } else {
            System.out.println("Preco Negativo!");
        }
    }

    public void setQtd(int qtd) {
        if (preco > 0) {
            this.qtd = qtd;
        } else {
            System.out.println("QTD Negativa!");
        }
    }

    public double valorTotalEmEstoque() {
        return preco * qtd;
    }

    public void adicionarEstoque(int qtd) {
        this.qtd += qtd;
    }

    public void removerEstoque(int qtd) {
        this.qtd -= qtd;
    }
}