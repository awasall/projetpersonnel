<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190810210803 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction ADD prenom_benef VARCHAR(255) NOT NULL, ADD nom_benef VARCHAR(255) NOT NULL, ADD type_piece_benef VARCHAR(255) DEFAULT NULL, ADD num_piece_benef VARCHAR(255) DEFAULT NULL, ADD telephone_benef VARCHAR(255) NOT NULL, ADD date_env DATETIME NOT NULL, ADD date_retrait DATETIME DEFAULT NULL, ADD montant BIGINT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction DROP prenom_benef, DROP nom_benef, DROP type_piece_benef, DROP num_piece_benef, DROP telephone_benef, DROP date_env, DROP date_retrait, DROP montant');
    }
}
