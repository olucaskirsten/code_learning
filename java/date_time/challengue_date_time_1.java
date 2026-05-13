import java.time.Duration;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;

public class challengue_date_time_1 {

    public static void main(String[] args) {

        /* Cria o scanner para leitura do teclado */
        Scanner scanner = new Scanner(System.in);

        /* Define o formato da hora */
        DateTimeFormatter formato = DateTimeFormatter.ofPattern("HH:mm");

        /* Lê a placa do veículo */
        System.out.print("Digite a placa do veículo: ");
        String placa = scanner.nextLine();

        /* Lê o horário de entrada */
        System.out.print("Digite o horário de entrada (HH:mm): ");
        String entradaTexto = scanner.nextLine();

        /* Lê o horário de saída */
        System.out.print("Digite o horário de saída (HH:mm): ");
        String saidaTexto = scanner.nextLine();

        /* Converte os textos para LocalTime */
        LocalTime entrada = LocalTime.parse(entradaTexto, formato);
        LocalTime saida = LocalTime.parse(saidaTexto, formato);

        /* Calcula a diferença entre os horários */
        Duration diferenca = Duration.between(entrada, saida);

        /* Converte o tempo total para minutos */
        long minutos = diferenca.toMinutes();

        /* Valor inicial da primeira hora */
        double total = 5.0;

        /* Verifica se passou de 60 minutos */
        if (minutos > 60) {

            /* Calcula os minutos excedentes */
            long excedente = minutos - 60;

            /* Calcula quantos blocos de 15 minutos existem */
            long blocos = (long) Math.ceil(excedente / 15.0);

            /* Adiciona R$ 2,00 por bloco */
            total += blocos * 2.0;
        }

        /* Exibe o recibo */
        System.out.println("\n-----------------------------");
        System.out.println("Recibo");
        System.out.println("-----------------------------");
        System.out.println("Placa: " + placa);
        System.out.println("Entrada: " + entrada.format(formato));
        System.out.println("Saida: " + saida.format(formato));
        System.out.println("Tempo total (em minutos): " + minutos);
        System.out.printf("Total a pagar: R$ %.2f\n", total);
        System.out.println("-----------------------------");

        /* Fecha o scanner */
        scanner.close();
    }
}