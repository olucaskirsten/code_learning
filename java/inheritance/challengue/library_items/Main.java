public class Main {
    public static void main(String[] args) {
        Livro livro = new Livro("O cavaleiro preso na armadura", 1993, "Robert Fisher", 128);
        DVD dvd = new DVD("Matrix", 1999, "Ficcao Cientifica", 136);

        System.out.println("Detalhes do livro:");
        System.out.println(livro);
        System.out.println("---");
        System.out.println("Detalhes do DVD:");
        System.out.println(dvd);
    }
}
