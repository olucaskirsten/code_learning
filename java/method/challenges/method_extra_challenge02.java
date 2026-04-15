import java.util.Scanner;

public class exercicio_extra2 {

    public static void produto() {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Digite o nome do produto: ");
        String nomeProduto = scanner.nextLine();

        System.out.println("Digite o valor do produto: ");
        double valorProduto = scanner.nextDouble();

        double desconto = valorProduto * 0.9;

        System.out.printf("Você comprou um produto %s por R$ %.2f e acaba de ganhar um desconto de 10%%. Assim você vai pagar apenas R$ %.2f pelo seu produto. Volte sempre!",
            nomeProduto, valorProduto, desconto);

        scanner.close();
    }

    public static void main(String[] args) {
        produto();
    }
}