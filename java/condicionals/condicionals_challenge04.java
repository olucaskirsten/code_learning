package condicionais;
import java.util.Scanner;

public class exercicio4_condicionais {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Digite um numero: ");
        int numero = scanner.nextInt();

        System.out.println("----------------------");

        if ((numero % 2 == 0) || (numero % 7 == 0)) {
            System.out.println("Numero é divisivel por 2 ou 7");
        }
        else {
            System.out.println("Numero não é divisivel por 2 ou 7");
        }

        scanner.close();

    }
}
