package exercicio;

import java.util.ArrayList;
import java.util.Comparator;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        ArrayList<Produto> lista = new ArrayList<>();

        // Inserindo 5 produtos
        for (int i = 1; i <= 5; i++) {
            System.out.print("Informe o nome do produto: ");
            String nome = scanner.nextLine();

            System.out.print("Informe o preço: ");
            double preco = scanner.nextDouble();
            scanner.nextLine(); // limpa buffer

            lista.add(new Produto(nome, preco));
            System.out.println();
        }

        // 1. Listar todos os produtos
        System.out.println("---- TODOS OS PRODUTOS ----");
        for (Produto p : lista) {
            System.out.println(p.getNome() + " - R$ " + p.getPreco());
        }

        // 2. Ordem crescente por nome
        lista.sort(Comparator.comparing(Produto::getNome));
        System.out.println("\n---- ORDEM POR NOME ----");
        for (Produto p : lista) {
            System.out.println(p.getNome() + " - R$ " + p.getPreco());
        }

        // 3. Ordem crescente por preço
        lista.sort(Comparator.comparing(Produto::getPreco));
        System.out.println("\n---- ORDEM POR PREÇO ----");
        for (Produto p : lista) {
            System.out.println(p.getNome() + " - R$ " + p.getPreco());
        }

        // 4. Produtos com preço > 100
        System.out.println("\n---- PRODUTOS ACIMA DE 100 ----");
        for (Produto p : lista) {
            if (p.getPreco() > 100) {
                System.out.println(p.getNome() + " - R$ " + p.getPreco());
            }
        }

        // 5. Buscar produto
        System.out.print("\nDigite o nome do produto para buscar: ");
        String busca = scanner.nextLine();

        boolean encontrado = false;

        for (Produto p : lista) {
            if (p.getNome().equalsIgnoreCase(busca)) {
                encontrado = true;
            }
        }

        if (encontrado) {
            System.out.println("O produto foi encontrado!");
        } else {
            System.out.println("O produto não existe na lista");
        }

        // 6. Buscar e excluir produto
        System.out.print("\nDigite o nome do produto para excluir: ");
        String excluir = scanner.nextLine();

        boolean removido = false;

        for (int i = 0; i < lista.size(); i++) {
            if (lista.get(i).getNome().equalsIgnoreCase(excluir)) {
                lista.remove(i);
                removido = true;
                break;
            }
        }

        if (removido) {
            System.out.println("O produto foi excluído!");
        } else {
            System.out.println("O produto não existe na lista");
        }

        // exibir lista atualizada
        System.out.println("\n---- LISTA ATUALIZADA ----");
            for (Produto p : lista) {
                System.out.println(p.getNome() + " - R$ " + p.getPreco());
            }

        scanner.close();
    }
}
