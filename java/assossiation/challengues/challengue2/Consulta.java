package challengue2;

// Classe Consulta
class Consulta {
    private Medico medico;
    private Paciente paciente;
    private String data;

    public Consulta(Medico medico, Paciente paciente, String data) {
        this.medico = medico;
        this.paciente = paciente;
        this.data = data;
    }

    @Override
    public String toString() {
        return "Consulta em " + data + "\n" +
               "Dr(a). " + medico.getNome() + " - " + medico.getEspecialidade() +
               " (CRM: " + medico.getCrm() + ")\n" +
               "Paciente: " + paciente.getNome() +
               " - Enfermidade: " + paciente.getEnfermidade();
    }
}
