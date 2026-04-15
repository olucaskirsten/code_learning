import java.util.ArrayList;
import java.util.Scanner;

public class arraylist_exercicio02 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<Integer> numeros = new ArrayList<>();

        for (int i = 0; i < 5; i++) {
            System.out.print("Digite um número: ");
            numeros.add(scanner.nextInt());
        }

        System.out.println("Lista completa: " + numeros);

        System.out.print("Números pares: ");
        for (int num : numeros) {
            if (num % 2 == 0) {
                System.out.print(num + " ");
            }
        }

        System.out.print("\nNúmeros ímpares: ");
        for (int num : numeros) {
            if (num % 2 != 0) {
                System.out.print(num + " ");
            }
        }

        scanner.close();
    }
}