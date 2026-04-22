USE HotelSaintGermain;

# Criar uma visão vBrasileiros que apresente o id, o nome e um documento de identificação para os clientes do hotel;
# o documento de identificação deve ser o cpf; As colunas da visão devem ser: ClienteId, Nome, Documento.
CREATE VIEW vBrasileiros AS
	SELECT C.Id ClienteId, C.Nome, CB.CPF Documento
    FROM Cliente C
    INNER JOIN ClienteBrasileiro CB
		ON CB.ClienteId = C.Id;

# Criar uma visão vEstrangeiros que apresente o id, o nome e um documento de identificação para os clientes do hotel;
# o documento de identificação deve ser o passaporte; As colunas da visão devem ser: ClienteId, Nome, Documento.
CREATE VIEW vEstrangeiros AS
	SELECT C.Id ClienteId, C.Nome, CE.Passaporte Documento
    FROM Cliente C
    INNER JOIN ClienteEstrangeiro CE
		ON CE.ClienteId = C.Id;

# Criar uma visão vReservas que apresente o número da reserva, o id do cliente, o nome do cliente, o número do quarto e a data de entrada;
# As colunas da visão devem ser: ClienteId, Nome, Quarto, DtaEntrada.
CREATE VIEW vReservas AS
	SELECT C.Id ClienteId, C.Nome, R.QuartoNumero Quarto, DATE(R.Entrada) DtaEntrada
    FROM Reserva R
    INNER JOIN Cliente C
		ON C.Id = R.ClienteId;

# Criar uma visão vConsumos que, em lista unificada, traga todos os consumos dos clientes do hotel, da seguinte maneira:
# uma coluna com o id do cliente, uma coluna identificando o consumo (prato para restaurante, item para frigobar e tipo para massagem)
# e uma coluna correspondente ao valor; As colunas da visão devem ser: ClienteId, Consumo, Valor.
CREATE VIEW vConsumos AS
	SELECT R.ClienteId, Rest.Prato Consumo, Rest.Preco * OcuRes.Quantidade Valor
	FROM Reserva R
	INNER JOIN OcupacaoRestaurante OcuRes
	ON OcuRes.ReservaNumero = R.Numero
	INNER JOIN Restaurante Rest 
		ON Rest.Id = OcuRes.RestauranteId
	UNION ALL
	SELECT R.ClienteId, Frig.Item Consumo, Frig.Preco * OcuFri.Quantidade Valor
	FROM Reserva R
	INNER JOIN  OcupacaoFrigobar OcuFri
	ON OcuFri.ReservaNumero = R.Numero
	INNER JOIN Frigobar Frig 
		ON Frig.Id = OcuFri.FrigobarId
	UNION ALL
	SELECT R.ClienteId, Mass.Tipo Consumo, Mass.Preco Valor
	FROM Reserva R
	INNER JOIN  OcupacaoMassagem OcuMas
	ON OcuMas.ReservaNumero = R.Numero
	INNER JOIN Massagem Mass 
		ON Mass.Id = OcuMas.MassagemId;

# Usando a visão vBrasileiros, apresente o nome do cliente e o número de telefone de todos os clientes do hotel, em ordem alfabética de nome.
SELECT VB.Nome, T.Numero Telefone
FROM vBrasileiros VB
INNER JOIN Telefone T
	ON T.ClienteId = VB.ClienteId
ORDER BY VB.Nome;

# Usando a visão vEstrangeiros, conte quantos clientes estrangeiros existem cadastrados no hotel.
SELECT COUNT(*) QuantosEstrangeiros FROM vEstrangeiros;

# Usando a visão vReservas, apresente, em ordem alfabética, o nome dos clientes com entradas previstas para hoje.
SELECT Nome FROM vReservas WHERE DtaEntrada = CURDATE() ORDER BY Nome;

# Usando as visões vBrasileiros e vConsumos, apresente o nome do cliente e o total consumido pelo cliente para todo e qualquer consumo feito no hotel.
SELECT VB.Nome, SUM(VC.Valor)
FROM vBrasileiros VB
INNER JOIN vConsumos VC 
	ON VC.ClienteId = VB.ClienteId;