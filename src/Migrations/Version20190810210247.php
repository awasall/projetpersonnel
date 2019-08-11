<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190810210247 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction ADD compte_env_id INT NOT NULL, ADD type_piece_env VARCHAR(255) NOT NULL, ADD num_piece_env VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1C2344C33 FOREIGN KEY (compte_env_id) REFERENCES compte (id)');
        $this->addSql('CREATE INDEX IDX_723705D1C2344C33 ON transaction (compte_env_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1C2344C33');
        $this->addSql('DROP INDEX IDX_723705D1C2344C33 ON transaction');
        $this->addSql('ALTER TABLE transaction DROP compte_env_id, DROP type_piece_env, DROP num_piece_env');
    }
}
