<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210116121014 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wb_stat_incomes (id UUID NOT NULL, transaction_key UUID NOT NULL, supplier_id UUID NOT NULL, income_id INT NOT NULL, number INT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, last_change_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, supplier_article VARCHAR(255) NOT NULL, tech_size VARCHAR(255) NOT NULL, barcode VARCHAR(255) NOT NULL, quantity INT NOT NULL, total_price INT NOT NULL, date_close TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, ware_house_name VARCHAR(255) NOT NULL, nm_id INT NOT NULL, status VARCHAR(255) NOT NULL, create_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, status_in_system VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN wb_stat_incomes.transaction_key IS \'(DC2Type:wb_stat_incomes_transaction_key)\'');
        $this->addSql('COMMENT ON COLUMN wb_stat_incomes.date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN wb_stat_incomes.last_change_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN wb_stat_incomes.date_close IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN wb_stat_incomes.create_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE wb_stat_suppliers (id UUID NOT NULL, name VARCHAR(255) NOT NULL, key_wildberries VARCHAR(255) NOT NULL, create_at VARCHAR(255) NOT NULL, update_at DATE NOT NULL, status VARCHAR(16) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN wb_stat_suppliers.id IS \'(DC2Type:wb_stat_supplier_id)\'');
        $this->addSql('COMMENT ON COLUMN wb_stat_suppliers.update_at IS \'(DC2Type:date_immutable)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE wb_stat_incomes');
        $this->addSql('DROP TABLE wb_stat_suppliers');
    }
}
