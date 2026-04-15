package intro_poo.exercicio1;

public class Livro {
    String titulo;
    String autor;
    int ano;

    public void exibirInfo() {
        System.out.println("Título: " + this.titulo);
        System.out.println("Autor: " + this.autor);
        System.out.println("Ano: " + this.ano);
    }
}