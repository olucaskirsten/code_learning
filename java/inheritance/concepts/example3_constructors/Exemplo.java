public class Exemplo {
    public static void main(String[] args) {
        Pessoa p1 = new Pessoa("Pedro", 21, "Masculino");
        Aluno p2 = new Aluno("Maria", 19, "Feminino", 123, "Computacao");
        Professor p3 = new Professor("Claudio", 42, "Masculino", "Programacao de Computadores", 5750.75);

        System.out.println(p1);
        System.out.println(p2);
        System.out.println(p3);
    }
}
