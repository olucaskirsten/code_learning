import java.util.Scanner;

public class exercicio_extra3 {

    public static void mediaArit(double nota1, double nota2, double nota3) {
        double mArit = (nota1 + nota2 + nota3) / 3;
        System.out.printf("A Média Aritmética dos valores fornecidos é: %.2f", mArit);
    }

    public static void mediaPond(double nota1, double nota2, double nota3) {
        double mPond = ((nota1 *5) + (nota2 * 3) + (nota3 * 2)) / 10;
        System.out.printf("A Média Ponderada dos valores fornecidos é: %.2f", mPond);
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Digite a 1a nota: ");
        Double nota1 = scanner.nextDouble();

        System.out.print("Digite a 2a nota: ");
        Double nota2 = scanner.nextDouble();

        System.out.print("Digite a 3a nota: ");
        Double nota3 = scanner.nextDouble();

        System.out.print("Digite A para média aritmetica ou P para média ponderada: ");
        String option = scanner.next();

        switch (option) {
            case "A":
                mediaArit(nota1, nota2, nota3);
                break;
            
            case "P":
                mediaPond(nota1, nota2, nota3);
                break;
        
            default:
                System.out.print("OPÇÃO INVÁLIDA");
                break;
        }


        scanner.close();
    }
}