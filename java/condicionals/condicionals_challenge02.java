package condicionais;
import java.util.Scanner;

public class exercicio2_condicionais {
    public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);

    System.out.println("Digite o 1o numero: ");
    int numero1 = scanner.nextInt();

    System.out.println("Digite o 2o numero: ");
    int numero2 = scanner.nextInt();

    System.out.println("Digite o 3o numero: ");
    int numero3 = scanner.nextInt();

    System.out.println("----------------------");

    if (numero1 < numero2 && numero1 < numero3) {
        System.out.println("Numero 1 é o menor");
    }
    else if (numero2 < numero1 && numero2 < numero3) {
        System.out.println("Numero 2 é o menor");
    }
    else {
        System.out.println("Numero 3 é o menor");
    }

    scanner.close();
    }
}
