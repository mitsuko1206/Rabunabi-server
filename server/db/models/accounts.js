module.exports = function(sequelize, DataTypes) {
    const Accounts = sequelize.define('Accounts', {
        id: DataTypes.INTEGER,
        point: DataTypes.INTEGER
    }, {
        tableName: 'accounts',
        paranoid: true,
        classMethods: {}
    }, );

    return Accounts;
};