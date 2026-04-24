package challengue1;

// Classe principal para teste
public class Main {
    public static void main(String[] args) {
        Cliente c1 = new Cliente("Carlos Silva", 25);
        Livro l1 = new Livro("Quincas Borba", "Machado de Assis");
        Emprestimo e1 = new Emprestimo(c1, l1, "08/04/2025");

        Cliente c2 = new Cliente("Ana Pereira", 30);
        Livro l2 = new Livro("A revolução dos bichos", "George Orwell");
        Emprestimo e2 = new Emprestimo(c2, l2, "08/04/2025");

        System.out.println(e1);
        System.out.println("\n---\n");
        System.out.println(e2);
    }
}