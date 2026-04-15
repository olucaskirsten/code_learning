import java.util.Scanner;

public class exercicio_extra1 {

    public static void produto() {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Digite o nome do produto: ");
        String nomeProduto = scanner.nextLine();

        System.out.println("Digite o valor do produto: ");
        double valorProduto = scanner.nextDouble();

        System.out.println("Digite o valor em dinheiro: ");
        double dinheiro = scanner.nextDouble();

        double troco = dinheiro - valorProduto;

        System.out.printf(
            "Você comprou um produto %s por R$ %.2f e entregou ao vendedor R$ %.2f em dinheiro. Você vai receber R$ %.2f de troco. Volte sempre!",
            nomeProduto, valorProduto, dinheiro, troco
        );

        scanner.close();
    }

    public static void main(String[] args) {
        produto();
    }
}