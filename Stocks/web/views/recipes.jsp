
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %> 
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="stocks.Stock" %> 

<c:import url="/views/header.jsp" />

        <%-- JSTL tag synatx --%>
        <jsp:useBean id="recipe" scope="request" class="recipes.recipe" />
        <td><jsp:getProperty name="recipe" property="name"/></td>
        <td><jsp:getProperty name="recipe" property="directions"/></td>
        <td><jsp:getProperty name="recipe" property="ingredientList"/></td>
    </tr>

    <c:forEach var="stockInList" items="${stocks}">
        <tr>
            <td>${stockInList.symbol}</td>
            <td>${stockInList.name}</td>
            <td>${stockInList.currentPrice}</td>
            <td>${stockInList.purchasePrice}</td>
            <td>${stockInList.value}</td>
        </tr>
    </c:forEach>
</table>

<c:import url="/views/footer.jsp" />