<php
--  Requête pour afficher les propriétaires et leurs biens
SELECT p.nom, p.prenom, p.adresse, p.telephone, b.nom AS bien 
FROM proprietaires p
LEFT JOIN proprietaire_biens pb ON p.id = pb.proprietaire_id
LEFT JOIN biens b ON pb.bien_id = b.id;
--  Requête pour afficher les détails d’un bien spécifique
SELECT * FROM biens WHERE id = ?;
-- Requête pour supprimer un bien
DELETE FROM biens WHERE id = ?;
-- Requête pour afficher tous les biens
SELECT id, reference, adresse, prix FROM biens;
-- Requête pour ajouter un nouveau bien
INSERT INTO biens (reference, adresse, prix) 
VALUES (?, ?, ?);