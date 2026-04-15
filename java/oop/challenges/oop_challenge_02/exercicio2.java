package exercicio2;

class exercicio2 {
    public static void main(String[] args) {
        /* Livro l1 = new Livro();
        l1.titulo = "A revolucao dos bichos";
        l1.autor = "George Orwell";
        l1.ano = 1945;
        l1.exibirInfo();
        
        Livro l2 = new Livro();
        l2.titulo = "O cavaleiro preso na armadura";
        l2.autor = "Robert Fisher";
        l2.ano = 2001;
        l2.exibirInfo(); */

        Livro l1 = new Livro("Viagem ao Centro da Terra", "Julio Verne", 1887);
 
        System.out.println("Titulo: " + l1.getTitulo());
        System.out.println("Autor: " + l1.getAutor());
        System.out.println("Ano: " + l1.getAno());
    }
}
