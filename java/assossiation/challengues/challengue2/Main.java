package challengue2;

// Classe principal
public class Main {
    public static void main(String[] args) {

        Medico m1 = new Medico("Carlos", 45, "Cardiologia", "12345");
        Paciente p1 = new Paciente("Ana", 30, "Hipertensão");

        Medico m2 = new Medico("Roberto", 50, "Ortopedia", "54321");
        Paciente p2 = new Paciente("Fernanda", 28, "Fratura no tornozelo");

        Consulta c1 = new Consulta(m1, p1, "17/04/2026");
        Consulta c2 = new Consulta(m2, p2, "22/04/2026");

        System.out.println(c1);
        System.out.println("---");
        System.out.println(c2);
    }
}
