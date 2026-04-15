package repetição;
import java.util.Scanner;

public class exercicio2_repeticao {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int soma = 0;
        int i = 1;
        
        while (i <= 100) {
            soma = soma + i;
            i++;
        }

        System.out.printf("o resultado é %d", soma);
    
        scanner.close();
    }
}
