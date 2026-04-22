USE HotelSaintGermain;

# Apresentar, em lista unificada, o nome e um documento de identificação para todos os clientes do hotel;
# o documento para brasileiros deve ser o cpf e para estrangeiros deve ser o passaporte.

SELECT C.Nome, CB.CPF DocumentoId
FROM Cliente C
INNER JOIN ClienteBrasileiro CB
	ON CB.ClienteId = C.Id
UNION ALL
SELECT C.Nome, CE.Passaporte DocumentoId
FROM Cliente C
INNER JOIN ClienteEstrangeiro CE
	ON CE.ClienteId = C.Id;
    
# Apresentar, em lista unificada, o nome, um documento de identificação (rg para brasileiros, passaporte para estrangeiros)
# e a data de nascimento de todos os clientes do hotel.

SELECT C.Nome, CB.RG DocumentoId, C.DtaNasc
FROM Cliente C
INNER JOIN ClienteBrasileiro CB
	ON CB.ClienteId = C.Id
UNION ALL
SELECT C.Nome, CE.Passaporte DocumentoId, C.DtaNasc
FROM Cliente C
INNER JOIN ClienteEstrangeiro CE
	ON CE.ClienteId = C.Id;

# Apresentar, em lista unificada, todos os consumos dos clientes do hotel, da seguinte maneira:
# uma coluna denominada “consumo” (apresentando o consumo: o prato para restaurante, o item para frigobar e o tipo para massagem)
# e mais a coluna correspondente ao “valor”

SELECT R.Prato Consumo, R.Preco * OcuRes.Quantidade Valor
FROM OcupacaoRestaurante OcuRes
INNER JOIN Restaurante R 
	ON R.Id = OcuRes.RestauranteId
UNION ALL
SELECT F.Item Consumo, F.Preco * OcuFri.Quantidade Valor
FROM OcupacaoFrigobar OcuFri
INNER JOIN Frigobar F 
	ON F.Id = OcuFri.FrigobarId
UNION ALL
SELECT M.Tipo Consumo, M.Preco Valor
FROM OcupacaoMassagem OcuMas
INNER JOIN Massagem M 
	ON M.Id = OcuMas.MassagemId;
