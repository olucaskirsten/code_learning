package challengue1;

// Classe Emprestimo
class Emprestimo {
    private Cliente cliente;
    private Livro livro;
    private String dataEmprestimo;

    public Emprestimo(Cliente cliente, Livro livro, String dataEmprestimo) {
        this.cliente = cliente;
        this.livro = livro;
        this.dataEmprestimo = dataEmprestimo;
    }

    @Override
    public String toString() {
        return "Dados do empréstimo:\n" +
               "Cliente: " + cliente.getNome() + " (Idade: " + cliente.getIdade() + ")\n" +
               "Livro: " + livro.getTitulo() + " por " + livro.getAutor() + "\n" +
               "Data do Empréstimo: " + dataEmprestimo;
    }
}