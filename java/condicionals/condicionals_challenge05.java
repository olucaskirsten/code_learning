package condicionais;
import java.util.Scanner;

public class exercicio5_condicionais {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Digite o numero de folhas: ");
        int numero = scanner.nextInt();

        System.out.println("----------------------");

        if (numero <= 100) {
            System.out.printf("O valor para %d folhas é: R$ %.2f", numero, (numero * 0.25));
        }
        else {
            System.out.printf("O valor para %d folhas é: R$ %.2f", numero, (numero * 0.20));
        }

        scanner.close();
    }
}
